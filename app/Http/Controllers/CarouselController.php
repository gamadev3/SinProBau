<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\CarouselImage;
use App\Services\FirebaseStorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarouselController extends Controller {
    protected $storageService;

    public function __construct(FirebaseStorageService $storageService) {
        $this->storageService = $storageService;
    }

    public function systemCarousel() {
        $carousel = CarouselImage::whereNotNull('image_url')
                        ->where('image_url', '!=', '')
                        ->get();

        return view("system.carousel.carousel", [
            "carousel" => $carousel
        ]);
    }

    public function carouselImageForm() {
        return view("system.carousel.carousel-form");
    }

    public function carouselImageRegister(Request $request) {
        $request->validate([
            "alt" => "required",
            "file" => "required|file|image"
        ], [
            "alt.required" => "Digite um texto alternativo para a imagem.",
            "file.required" => "Adicione uma imagem.",
        ]);

        [$imageUrl, $firebaseStoragePath] = $this->storageService->uploadFile(
            $request,
            "carousel/"
        );

        $carouselImage = new CarouselImage;

        $carouselImage->alt = $request->alt;
        $carouselImage->image_url = $imageUrl;
        $carouselImage->image_path = $firebaseStoragePath;

        try {
            $carouselImage->save();
        } catch (Exception $error) {
            Log::error("Erro ao salvar notícia: " . $error->getMessage());
            return back()->with("error", "Erro ao salvar a imagem do carrossel.");
        }

        return redirect("/sistema/carrossel")->with("success", "Imagem do carrossel cadastrada com sucesso!");
    }

    public function carouselUpdateForm($id) {
        $carouselImage = CarouselImage::findOrFail($id);

        if (!$carouselImage) {
            return redirect("/sistema/carrossel")->with("error", "Imagem não encontrada.");
        }

        return view("system.carousel.carousel-update-form", [
            "carouselImage" => $carouselImage
        ]);
    }

    public function carouselImageUpdate(Request $request) {
        $request->validate([
            "alt" => "required",
        ], [
            "alt.required" => "Digite um título para a notícia.",
        ]);

        $oldCarouselImage = CarouselImage::findOrFail($request->id);

        [$imageUrl, $firebaseStoragePath] = $this->storageService->updateFile(
            $request,
            $oldCarouselImage->image_path
        );

        if ($imageUrl) {
            $oldCarouselImage->image_url = $imageUrl;
            $oldCarouselImage->image_path = $firebaseStoragePath;
        }

        $oldCarouselImage->update($request->only(["alt"]));

        return redirect("/sistema/carrossel")->with("success", "Imagem atualizada com sucesso!");
    }

    public function carouselImageDelete($id) {
        $carouselImage = CarouselImage::findOrFail($id);

        if (!$carouselImage) {
            return redirect("/sistema/carrossel")->with("error", "Imagem não encontrada.");
        }

        $this->storageService->deleteFile($carouselImage->image_path);
        $carouselImage->delete();

        return redirect("/sistema/carrossel")->with("success", "Imagem excluída com sucesso!");
    }
}
