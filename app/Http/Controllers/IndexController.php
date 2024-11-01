<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function basicEducation() {
        return view("conventions.basic-education");
    }

    public function higherEducation() {
        return view("conventions.higher-education");
    }

    public function sesiSenai() {
        return view("conventions.sesi-senai");
    }

    public function senac() {
        return view("conventions.senac");
    }

    public function syndicateAbout() {
        return view("syndicate.about");
    }

    public function syndicateDirectors() {
        return view("syndicate.directors");
    }

    public function virtualCard() {
        return view("virtual-card");
    }

    public function news() {
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

        return view("news", ["news" => $news]);
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

    public function login() {
        return view("auth.login");
    }

    public function system() {
        return view("system.dashboard");
    }
}
