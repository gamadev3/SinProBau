<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\CarouselImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class CarouselController extends Controller {
    protected $storage;

    public function __construct() {
        $this->storage = App::make("firebase")->createStorage();
    }

    public function systemCarousel() {
        $carousel = CarouselImage::all();

        return view("system.carousel.carousel", [
            "carousel" => $carousel
        ]);
    }

    public function carouselImageForm() {
        return view("system.carousel.carousel-form");
    }

    public function uploadImageToStorage(Request $request) {
        $file = $request->file("image");
        $fileName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $file->extension();
        $firebaseStoragePath = "carousel/" . $fileName;

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

    public function carouselImageRegister(Request $request) {
        $request->validate([
            "alt" => "required",
            "image" => "required|file"
        ], [
            "alt.required" => "Digite um texto alternativo para a imagem.",
            "image.required" => "Adicione uma imagem.",
        ]);

        [$imageUrl, $firebaseStoragePath] = $this->uploadImageToStorage($request);

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

    public function deleteImageFromStorage($filePath) {
        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        $bucket->object($filePath)->delete();
        return;
    }

    public function carouselImageUpdate(Request $request) {
        $request->validate([
            "alt" => "required",
        ], [
            "alt.required" => "Digite um título para a notícia.",
        ]);

        $oldCarouselImage = CarouselImage::findOrFail($request->id);

        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            $this->deleteImageFromStorage($oldCarouselImage->image_path);
            [$imageUrl, $firebaseStoragePath] = $this->uploadImageToStorage($request);
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

        $this->deleteImageFromStorage($carouselImage->image_path);
        $carouselImage->delete();

        return redirect("/sistema/carrossel")->with("success", "Imagem excluída com sucesso!");
    }
}
