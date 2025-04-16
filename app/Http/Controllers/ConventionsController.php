<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Convention;
use App\Services\FirebaseStorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConventionsController extends Controller {
    protected $storageService;

    public function __construct(FirebaseStorageService $storageService) {
        $this->storageService = $storageService;
    }

    public function education($type, $view) {
        $conventions = Convention::where("type", "LIKE", "%{$type}%")
                                    ->orderBy("updated_at", "desc")
                                    ->get();

        return view($view, ["conventions" => $conventions]);
    }

    public function basicEducation() {
        return $this->education("educacao-basica", "conventions.basic-education");
    }

    public function higherEducation() {
        return $this->education("ensino-superior", "conventions.higher-education");
    }

    public function sesiSenai() {
        return $this->education("sesi-senai", "conventions.sesi-senai");
    }

    public function senac() {
        return $this->education("senac", "conventions.senac");
    }

    public function apae() {
        return $this->education("apae", "conventions.apae");
    }

    public function educationSystem($type, $view) {
        $search = request("search");

        $query = Convention::where("type", "LIKE", "%{$type}%");

        if ($search) {
            $conventions = $query->where("title", "LIKE", "%{$search}%")
                                    ->get();
        } else {
            $conventions = $query->orderBy("updated_at", "desc")
                                    ->get();
        }

        return view($view, ["conventions" => $conventions]);
    }

    public function basicEducationSystem() {
        return $this->educationSystem("educacao-basica", "system.conventions.basic-education");
    }

    public function higherEducationSystem() {
        return $this->educationSystem("ensino-superior", "system.conventions.higher-education");
    }

    public function sesiSenaiSystem() {
        return $this->educationSystem("sesi-senai", "system.conventions.sesi-senai");
    }

    public function senacSystem() {
        return $this->educationSystem("senac", "system.conventions.senac");
    }

    public function apaeSystem() {
        return $this->educationSystem("apae", "system.conventions.apae");
    }

    public function conventionForm() {
        $type = request("type");

        return view("system.conventions.convention-form", ["type" => $type]);
    }

    public function conventionRegister(Request $request) {
        $request->validate([
            "title" => "required",
            "type" => "required",
            "file" => "file",
        ], [
            "title.required" => "Digite um título para a convenção.",
            "type.required" => "Selecione o tipo da convenção.",
        ]);

        [$documentUrl, $firebaseStoragePath] = $this->storageService->uploadFile(
            $request,
            "conventions/" . $request->type . "/"
        );

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

        return redirect("/sistema/" . $request->type)->with("success", "Convenção cadastrada com sucesso!");
    }

    public function conventionUpdateForm($id) {
        $convention = Convention::findOrFail($id);

        if (!$convention) {
            return redirect("/sistema/conventions/" . $convention->type)->with("error", "Convenção não encontrada.");
        }

        return view("system.conventions.convention-update-form", ["convention" => $convention]);
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

        [$imageUrl, $firebaseStoragePath] = $this->storageService->updateFile(
            $request,
            $oldConvention->document_path
        );

        if ($imageUrl) {
            $oldConvention->document_url = $imageUrl;
            $oldConvention->document_path = $firebaseStoragePath;
        }

        $oldConvention->update($request->only(["title", "type"]));

        return redirect("/sistema/" . $request->type)->with("success", "Convenção atualizada com sucesso!");
    }

    public function conventionDelete($id) {
        $convention = Convention::findOrFail($id);
        $type = $convention->type;

        if (!$convention) {
            return redirect("/sistema/" . $type)->with("error", "Convenção não encontrada.");
        }

        $this->storageService->deleteFile($convention->document_path);
        $convention->delete();

        return redirect("/sistema/" . $type)->with("success", "Convenção excluída com sucesso!");
    }
}
