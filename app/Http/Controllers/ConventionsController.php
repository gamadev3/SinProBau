<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Convention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class ConventionsController extends Controller {
    protected $storage;

    public function __construct() {
        $this->storage = App::make("firebase")->createStorage();
    }

    public function basicEducation() {
        $conventions = Convention::where("type", "LIKE", "%basic-education%")->get();

        return view("conventions.basic-education", ["conventions" => $conventions]);
    }

    public function higherEducation() {
        $conventions = Convention::where("type", "LIKE", "%higher-education%")->get();

        return view("conventions.higher-education", ["conventions" => $conventions]);
    }

    public function sesiSenai() {
        $conventions = Convention::where("type", "LIKE", "%sesi-senai%")->get();

        return view("conventions.sesi-senai", ["conventions" => $conventions]);
    }

    public function senac() {
        $conventions = Convention::where("type", "LIKE", "%senac%")->get();


        return view("conventions.senac", ["conventions" => $conventions]);
    }

    public function basicEducationSystem() {
        $search = request("search");

        if ($search) {
            $conventions = Convention::where("type", "LIKE", "%basic-education%")
                                        ->where("title", "LIKE", "%{$search}%")
                                        ->get();
        } else {
            $conventions = Convention::where("type", "LIKE", "%basic-education%")->get();
        }

        return view("system.conventions.basic-education", ["conventions" => $conventions]);
    }

    public function higherEducationSystem() {
        $search = request("search");

        if ($search) {
            $conventions = Convention::where("type", "LIKE", "%higher-education%")
                                        ->where("title", "LIKE", "%{$search}%")
                                        ->get();
        } else {
            $conventions = Convention::where("type", "LIKE", "%higher-education%")->get();
        }

        return view("system.conventions.higher-education", ["conventions" => $conventions]);
    }

    public function sesiSenaiSystem() {
        $search = request("search");

        if ($search) {
            $conventions = Convention::where("type", "LIKE", "%sesi-senai%")
                                        ->where("title", "LIKE", "%{$search}%")
                                        ->get();
        } else {
            $conventions = Convention::where("type", "LIKE", "%sesi-senai%")->get();
        }

        return view("system.conventions.sesi-senai", ["conventions" => $conventions]);
    }

    public function senacSystem() {
        $search = request("search");

        if ($search) {
            $conventions = Convention::where("type", "LIKE", "%senac%")
                                        ->where("title", "LIKE", "%{$search}%")
                                        ->get();
        } else {
            $conventions = Convention::where("type", "LIKE", "%senac%")->get();
        }

        return view("system.conventions.senac", ["conventions" => $conventions]);
    }

    public function conventionForm() {
        $type = request("type");

        return view("system.conventions.convention-form", ["type" => $type]);
    }

    public function uploadDocumentToStorage(Request $request, string $type) {
        $file = $request->file("file");
        $fileName = md5($file->getClientOriginalName() . strtotime("now")) . "." . $file->extension();
        $firebaseStoragePath = "conventions/" . $type . "/" . $fileName;

        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        $bucket->upload(
            fopen($file->getRealPath(), "r"),
            ["name" => $firebaseStoragePath]
        );

        $documentUrl = "https://firebasestorage.googleapis.com/v0/b/" . $bucketName . "/o/" . urlencode($firebaseStoragePath) . "?alt=media";
        return [
            $documentUrl,
            $firebaseStoragePath
        ];
    }

    public function conventionRegister(Request $request) {
        $request->validate([
            "title" => "required",
            "type" => "required",
            "file" => "required|file",
        ], [
            "title.required" => "Digite um título para a convenção.",
            "type.required" => "Selecione o tipo da convenção.",
            "file.required" => "Insira uma convenção.",
        ]);

        [$documentUrl, $firebaseStoragePath] = $this->uploadDocumentToStorage($request, $request->type);

        $convention = new Convention;

        $convention->fill($request->only(["title", "type"]));
        $convention->document_url = $documentUrl;
        $convention->document_path = $firebaseStoragePath;

        try {
            $convention->save();
        } catch (Exception $error) {
            Log::error("Erro ao salvar convenção: " . $error->getMessage());
            return back()->with("error", "Erro ao salvar a convenção.");
        }

        return redirect("/system/" . $request->type)->with("success", "Convenção cadastrada com sucesso!");
    }

    public function conventionUpdateForm($id) {
        $convention = Convention::findOrFail($id);

        if (!$convention) {
            return redirect("/system/conventions/" . $convention->type)->with("error", "Convenção não encontrada.");
        }

        return view("system.conventions.convention-update-form", ["convention" => $convention]);
    }

    public function deleteDocumentFromStorage($filePath) {
        $bucketName = env("FIREBASE_BUCKET");
        $bucket = $this->storage->getBucket($bucketName);

        $bucket->object($filePath)->delete();
        return;
    }

    public function conventionUpdate(Request $request) {
        $request->validate([
            "title" => "required",
            "type" => "required",
        ], [
            "title.required" => "Digite um título para a convenção.",
            "type.required" => "Selecione o tipo da convenção.",
        ]);

        $oldConvention = Convention::findOrFail($request->id);
        $type = $request->type;

        if ($request->hasFile("file") && $request->file("file")->isValid()) {
            $this->deleteDocumentFromStorage($oldConvention->document_path);
            [$documentUrl, $firebaseStoragePath] = $this->uploadDocumentToStorage($request, $type);
            $oldConvention->document_url = $documentUrl;
            $oldConvention->document_path = $firebaseStoragePath;
        }

        $oldConvention->update($request->only(["title", "type"]));

        return redirect("/system/" . $type)->with("success", "Convenção atualizada com sucesso!");
    }

    public function conventionDelete($id) {
        $convention = Convention::findOrFail($id);
        $type = $convention->type;

        if (!$convention) {
            return redirect("/system/" . $type)->with("error", "Convenção não encontrada.");
        }

        $this->deleteDocumentFromStorage($convention->document_path);
        $convention->delete();

        return redirect("/system/" . $type)->with("success", "Convenção excluída com sucesso!");
    }
}
