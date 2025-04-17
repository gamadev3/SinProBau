<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FirebaseStorageService {
    protected $storage;

    public function __construct() {
        $this->storage = App::make("firebase")->createStorage();
    }

    public function uploadFile(Request $request, $path) {
        $file = $request->file("file");
        $fileName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $file->extension();
        $firebaseStoragePath = $path . $fileName;

        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        try {
            $bucket->upload(
                fopen($file->getRealPath(), "r"),
                ["name" => $firebaseStoragePath]
            );

            $imageUrl = "https://firebasestorage.googleapis.com/v0/b/" . $bucketName . "/o/" . urlencode($firebaseStoragePath) . "?alt=media";

            return [
                $imageUrl,
                $firebaseStoragePath
            ];
        } catch (Exception $error) {
            throw new Exception("Erro ao fazer upload do arquivo: ", $error->getMessage());
        }
    }

    public function updateFile(Request $request, $path) {
        if ($request->hasFile("file") && $request->file("file")->isValid()) {
            if ($path) {
                $this->deleteFile($path);
            }

            return $this->uploadFile(
                $request,
                "carousel/"
            );
        }
    }

    public function deleteFile($filePath) {
        if (empty($filePath)) {
            return; // ou lance uma exceção se for necessário tratar
        }
    
        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);
    
        try {
            $bucket->object($filePath)->delete();
        } catch (Exception $error) {
            throw new Exception("Erro ao deletar o arquivo: " . $error->getMessage());
        }
    }
}
