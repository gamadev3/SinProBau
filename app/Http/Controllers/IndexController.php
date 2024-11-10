<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Exception;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller {
    public function index() {
        $news = [
            [
                "date" => "07 de Fevereiro de 2024",
                "title" => "Campanha salarial 2024",
                "image" => "image.png"
            ],
            [
                "date" => "22 de Maio de 2023",
                "title" => "Assembleia Geral Extraordinária Virtual - 23/05",
                "image" => "image2.png"
            ],
            [
                "date" => "12 de Fevereiro de 2019",
                "title" => "Pauta Salarial SESI SENAI",
                "image" => "image3.png"
            ],
            [
                "date" => "01 de Novembro de 2018",
                "title" => "Pretende sair da escola em que leciona? Espera, ainda é cedo pra pedir demissão",
                "image" => "image4.png"
            ],
        ];

        return view("home", ["news" => $news]);
    }

    public function virtualCard() {
        return view("virtual-card");
    }

    public function contact() {
        return view("contact");
    }

    public function becomeAMember() {
        return view("become-a-member");
    }

    public function credits() {
        return view("credits");
    }

    public function news() {
        $news = News::all() ?? [];

        return view("system.news", ["news" => $news]);
    }
}
