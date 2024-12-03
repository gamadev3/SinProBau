<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\News;
use App\Services\FirebaseStorageService;

class NewsController extends Controller {
    protected $storageService;

    public function __construct(FirebaseStorageService $storageService) {
        $this->storageService = $storageService;
    }

    // Todas as notícias da tela de notícias
    public function news() {
        $trendingNotice = News::where("is_trending", "=", "1")->first();

        $news = News::where("is_trending", "=", "0")
                        ->orderBy("updated_at", "desc")
                        ->paginate(4);

        return view("news.news", [
            "trendingNotice" => $trendingNotice,
            "news" => $news
        ]);
    }

    // Todas as notícias da tela de notícias do sistema
    public function systemNews() {
        $search = request("search");

        if ($search) {
            $news = News::where("title", "LIKE", "%{$search}%")
                            ->orWhere("content", "LIKE", "%{$search}%")
                            ->get();
        } else {
            $news = News::orderBy("updated_at", "desc")->get();
        }

        return view("system.news.news", ["news" => $news]);
    }

    // Apenas uma notícia da tela de notícias
    public function notice($id) {
        $notice = News::findOrFail($id);
        $notice->content = preg_replace(
            "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/",
            "<a href='$0' class='text-blue-500 hover:underline'>$0</a>",
            $notice->content
        );

        $recentNews = News::where("id", "!=", $id)
                            ->orderBy("updated_at", "desc")
                            ->take(3)
                            ->get();

        return view("news.notice", [
            "notice" => $notice,
            "news" => $recentNews
        ]);
    }

    // Formulário para cadastrar uma notícia
    public function noticeForm() {
        return view("system.news.news-form");
    }

    // Cadastra a notícia
    public function noticeRegister(Request $request) {
        $request->validate([
            "title" => "required",
            "content" => "required",
            "image" => "required|file",
        ], [
            "title.required" => "Digite um título para a notícia.",
            "content.required" => "Digite o conteúdo da notícia.",
            "image.required" => "Adicione uma imagem.",
        ]);

        [$imageUrl, $firebaseStoragePath] = $this->storageService->uploadFile($request, "news/");

        $notice = new News;

        $notice->fill($request->only(["title", "content"]));
        $notice->salary_campaign = $request->has("salary_campaign") ? true : false;
        $notice->is_trending = $request->has("is_trending") ? true : false;
        $notice->image_url = $imageUrl;
        $notice->image_path = $firebaseStoragePath;

        try {
            $notice->save();
        } catch (Exception $error) {
            Log::error("Erro ao salvar notícia: " . $error->getMessage());
            return back()->with("error", "Erro ao salvar a notícia.");
        }

        return redirect("/sistema/noticias")->with("success", "Notícia cadastrada com sucesso!");
    }

    // Formulário para atualizar uma notícia
    public function noticeUpdateForm($id) {
        $notice = News::findOrFail($id);

        if (!$notice) {
            return redirect("/sistema/noticias")->with("error", "Notícia não encontrada.");
        }

        return view("system.news.news-update-form", ["notice" => $notice]);
    }

    public function noticeUpdate(Request $request) {
        $request->validate([
            "title" => "required",
            "content" => "required",
        ], [
            "title.required" => "Digite um título para a notícia.",
            "content.required" => "Digite o conteúdo da notícia.",
        ]);

        $oldNotice = News::findOrFail($request->id);

        $this->storageService->updateFile($request, $oldNotice);

        $oldNotice->salary_campaign = $request->has("salary_campaign") ? true : false;
        $oldNotice->is_trending = $request->has("is_trending") ? true : false;
        $oldNotice->update($request->only(["title", "content"]));

        return redirect("/sistema/noticias")->with("success", "Notícia atualizada com sucesso!");
    }

    public function noticeDelete($id) {
        $notice = News::findOrFail($id);

        if (!$notice) {
            return redirect("/sistema/noticias")->with("error", "Notícia não encontrada.");
        }

        $this->storageService->deleteFile($notice->image_path);
        $notice->delete();

        return redirect("/sistema/noticias")->with("success", "Notícia excluída com sucesso!");
    }
}
