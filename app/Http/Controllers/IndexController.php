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
        $conventions = [
            [
                "date" => "2024-09-19 00:00:00",
                "title" => "Convenção Coletiva de Trabalho 2024"
            ],
            [
                "date" => "2024-05-17 00:00:00",
                "title" => "Comunicado Conjunto 2024"
            ],
            [
                "date" => "2023-05-22 00:00:00",
                "title" => "Comunicado Conjunto 2023"
            ],
            [
                "date" => "2024-09-19 00:00:00",
                "title" => "Convenção Coletiva de Trabalho 2022-2023"
            ],
            [
                "date" => "2022-03-22 00:00:00",
                "title" => "Comunicado Conjunto 2022"
            ],
            [
                "date" => "2024-03-22 00:00:00",
                "title" => "Convenção Coletiva de Trabalho 2021"
            ],
        ];

        return view("conventions.basic-education", ["conventions" => $conventions]);
    }

    public function higherEducation() {
        $conventions = [
            [
                "date" => "2024-06-26 00:00:00",
                "title" => "Comunicado Conjunto - SEMESP 2024"
            ],
            [
                "date" => "2024-08-25 00:00:00",
                "title" => "CCT Ensino Superior 2024"
            ],
            [
                "date" => "2023-08-25 00:00:00",
                "title" => "CCT Ensino Superior 2022/2023"
            ],
            [
                "date" => "2023-02-08 00:00:00",
                "title" => "Dissídio Coletivo 2022"
            ],
            [
                "date" => "2022-08-26 00:00:00",
                "title" => "Confira a CARTA ABERTA - ENSINO SUPERIOR PRIVADO NO ESTADO DE SÃO PAULO"
            ],
            [
                "date" => "2022-03-22 00:00:00",
                "title" => "CCT_ES_Prof_2021_Bauru"
            ],
        ];

        return view("conventions.higher-education", ["conventions" => $conventions]);
    }

    public function sesiSenai() {
        $conventions = [
            [
                "date" => "2024-03-23 00:00:00",
                "title" => "Acordo Coletivo de Trabalho SENAI-SP 2021"
            ],
            [
                "date" => "2024-03-23 00:00:00",
                "title" => "Acordo Coletivo de Trabalho SESI-SP 2021"
            ],
        ];

        return view("conventions.sesi-senai", ["conventions" => $conventions]);
    }

    public function senac() {
        $conventions = [
            [
                "date" => "2022-03-23 00:00:00",
                "title" => "Acordo Coletivo SENAC 2021"
            ],
        ];

        return view("conventions.senac", ["conventions" => $conventions]);
    }

    public function syndicateAbout() {
        return view("syndicate.about");
    }

    public function syndicateDirectors() {
        $directors = [
            [
                "role" => "Presidente",
                "name" => "Sebastiao Clementino da Silva",
                "image" => "diretoria-2.jpeg"
            ],
            [
                "role" => "Vice - Presidente",
                "name" => "Elvio Gilberto da Silva",
                "image" => "diretoria-3.jpeg"
            ],
            [
                "role" => "Secretária Geral",
                "name" => "Monica Medola Damine",
                "image" => "diretoria-4.jpeg"
            ],
            [
                "role" => "Diretor de Assuntos Profissionais",
                "name" => "Felipe de Moura Garrido",
                "image" => "diretoria-5.jpeg"
            ],
            [
                "role" => "Diretor Tesoureiro",
                "name" => "Sebastião Clementino da Silva",
                "image" => "diretoria-6.jpeg"
            ],
            [
                "role" => "Diretor Suplente",
                "name" => "Luciana Bezerra de Toledo",
                "image" => "diretoria-7.jpeg"
            ],
            [
                "role" => "Diretor Suplente",
                "name" => "Washington Luiz Bueno Silva",
                "image" => "diretoria-7.jpeg"
            ],
            [
                "role" => "Conselho Fiscal - Efetivos",
                "name" => "Nair Leite Ribeiro Nassarala",
                "image" => "diretoria-2.jpeg"
            ],
            [
                "role" => "Conselho Fiscal - Efetivos",
                "name" => "Creusa Vitalino Guimarã",
                "image" => "diretoria-8.jpeg"
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Efetivos",
                "name" => "Sebastião Clementino da Silva",
                "image" => "diretoria-9.jpeg"
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Efetivos",
                "name" => "Carlos Roberto de Oliveira",
                "image" => "diretoria-9.jpeg"
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Suplentes",
                "name" => "Felipe de Moura Garrido",
                "image" => "diretoria-10.jpeg"
            ],
        ];

        return view("syndicate.directors", ["directors" => $directors]);
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
