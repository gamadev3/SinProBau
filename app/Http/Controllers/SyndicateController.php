<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\Director;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SyndicateController extends Controller {
    public function syndicate() {
        $direction = Direction::first();

        $directors = Director::all();

        return view("syndicate.syndicate", [
            "direction" => $direction,
            "directors" => $directors
        ]);
    }

    public function systemSyndicateDirectors() {
        $direction = Direction::first();

        $search = request("search");

        if ($search) {
            $directors = Director::where("name", "LIKE", "%{$search}%")
                                        ->orWhere("role", "LIKE", "%{$search}%")
                                        ->get();
        } else {
            $directors = Director::all();
        }

        return view("system.syndicate.syndicate", [
            "direction" => $direction,
            "directors" => $directors
        ]);
    }

    public function syndicateDurationUpdate(Request $request) {
        $request->validate([
            "start" => "required|date_format:d/m/Y",
            "end" => "required|date_format:d/m/Y|after_or_equal:start",
        ]);

        Direction::first()->update([
            "start_date" => Carbon::createFromFormat("d/m/Y", $request->start)->format("Y-m-d"),
            "end_date" => Carbon::createFromFormat("d/m/Y", $request->end)->format("Y-m-d"),
        ]);

        return redirect("/system/syndicate")->with("success", "Período de vigência atualizado com sucesso!");
    }

    public function syndicateForm() {
        return view("system.syndicate.syndicate-form");
    }

    public function directorRegister(Request $request) {
        $director = new Director;

        $director->fill($request->only(["name", "role"]));
        $director->direction_id = 1;

        try {
            $director->save();
        } catch (Exception $error) {
            Log::error("Erro ao salvar diretor: " . $error->getMessage());
            return back()->with("error", "Erro ao salvar diretor.");
        }

        return redirect("/system/syndicate")->with("success", "Diretor cadastrado com sucesso!");
    }

    public function directorUpdateForm($id) {
        $director = Director::findOrFail($id);

        if (!$director) {
            return redirect("/system/syndicate")->with("error", "Diretor não encontrado.");
        }

        return view("system.syndicate.syndicate-update-form", ["director" => $director]);
    }

    public function directorUpdate(Request $request) {
        $director = Director::findOrFail($request->id);

        $director->update($request->only(["name", "role"]));

        return redirect("/system/syndicate")->with("success", "Diretor atualizado com sucesso!");
    }

    public function directorDelete($id) {
        $director = Director::findOrFail($id);

        $director->delete();

        return redirect("/system/syndicate")->with("success", "Diretor excluído com sucesso!");
    }
}
