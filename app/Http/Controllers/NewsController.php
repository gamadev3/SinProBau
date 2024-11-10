<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\News;

class NewsController extends Controller {
    protected $storage;

    public function __construct() {
        $this->storage = App::make("firebase")->createStorage();
    }

    // Todas as notícias da tela de notícias
    public function news() {
        $news = News::all();

        return view("news.news", ["news" => $news]);
    }

    // Todas as notícias da tela de notícias do sistema
    public function systemNews() {
        $search = request("search");

        if ($search) {
            $news = News::where("title", "LIKE", "%{$search}%")
                ->orWhere("content", "LIKE", "%{$search}%")
                ->get();
        } else {
            $news = News::all();
        }

        return view("system.news.news", ["news" => $news]);
    }

    // Apenas uma notícia da tela de notícias
    public function notice($id) {
        $notice = News::findOrFail($id);

        return view("news.notice", ["notice" => $notice]);
    }

    // Formulário para cadastrar uma notícia
    public function noticeForm() {
        return view("system.news.news-form");
    }

    public function uploadImageToStorage(Request $request) {
        $file = $request->file("image");
        $fileName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $file->extension();
        $firebaseStoragePath = "news/" . $fileName;

        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        $bucket->upload(
            fopen($file->getRealPath(), "r"),
            ["name" => $firebaseStoragePath]
        );

        $imageUrl = "https://firebasestorage.googleapis.com/v0/b/" . $bucketName . "/o/" . urlencode($firebaseStoragePath) . "?alt=media";
        return [
            $imageUrl,
            $firebaseStoragePath
        ];
    }

    // Cadastra a notícia
    public function registerNotice(Request $request) {
        $request->validate([
            "title" => "required",
            "content" => "required",
            "image" => "required|file",
        ], [
            "title.required" => "Digite um título para a notícia.",
            "content.required" => "Digite o conteúdo da notícia.",
            "image.required" => "Adicione uma imagem.",
        ]);

        [$imageUrl, $firebaseStoragePath] = $this->uploadImageToStorage($request);

        $news = new News;

        $news->fill($request->only(["title", "content"]));
        $news->image_url = $imageUrl;
        $news->image_path = $firebaseStoragePath;

        try {
            $news->save();
        } catch (Exception $error) {
            Log::error("Erro ao salvar notícia: " . $error->getMessage());
            return back()->with("error", "Erro ao salvar a notícia.");
        }

        return redirect("/system/news")->with("success", "Notícia cadastrada com sucesso!");
    }

    // Formulário para atualizar uma notícia
    public function noticeUpdateForm($id) {
        $notice = News::findOrFail($id);

        if (!$notice) {
            return redirect("/system/news")->with("error", "Notícia não encontrada.");
        }

        return view("system.news.news-update-form", ["notice" => $notice]);
    }

    // Deleta uma imagem do Storage
    public function deleteImageFromStorage($filePath) {
        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        $bucket->object($filePath)->delete();
        return;
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

        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            $this->deleteImageFromStorage($oldNotice->image_path);
            [$imageUrl, $firebaseStoragePath] = $this->uploadImageToStorage($request);
            $oldNotice->image_url = $imageUrl;
            $oldNotice->image_path = $firebaseStoragePath;
        }

        $oldNotice->update($request->only(["title", "content"]));

        return redirect("/system/news")->with("success", "Notícia atualizada com sucesso!");
    }

    public function noticeDelete($id) {
        $notice = News::findOrFail($id);

        if (!$notice) {
            return redirect("/system/news")->with("error", "Notícia não encontrada.");
        }

        $this->deleteImageFromStorage($notice->image_path);
        $notice->delete();

        return redirect("/system/news")->with("success", "Notícia excluída com sucesso!");
    }
}
