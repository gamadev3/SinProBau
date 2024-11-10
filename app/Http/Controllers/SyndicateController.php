<?php

namespace App\Http\Controllers;

class SyndicateController extends Controller {
    public function syndicateAbout() {
        return view("syndicate.about");
    }

    public function syndicateDirectors() {
        $directors = [
            [
                "role" => "Presidente",
                "name" => "Sebastiao Clementino da Silva",
            ],
            [
                "role" => "Vice - Presidente",
                "name" => "Elvio Gilberto da Silva",
            ],
            [
                "role" => "Secretária Geral",
                "name" => "Monica Medola Damine",
            ],
            [
                "role" => "Diretor de Assuntos Profissionais",
                "name" => "Felipe de Moura Garrido",
            ],
            [
                "role" => "Diretor Tesoureiro",
                "name" => "Sebastião Clementino da Silva",
            ],
            [
                "role" => "Diretor Suplente",
                "name" => "Luciana Bezerra de Toledo",
            ],
            [
                "role" => "Diretor Suplente",
                "name" => "Washington Luiz Bueno Silva",
            ],
            [
                "role" => "Conselho Fiscal - Efetivos",
                "name" => "Nair Leite Ribeiro Nassarala",
            ],
            [
                "role" => "Conselho Fiscal - Efetivos",
                "name" => "Creusa Vitalino Guimarã",
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Efetivos",
                "name" => "Sebastião Clementino da Silva",
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Efetivos",
                "name" => "Carlos Roberto de Oliveira",
            ],
            [
                "role" => "Delegados Representantes junto à Federação - Suplentes",
                "name" => "Felipe de Moura Garrido",
            ],
        ];

        return view("syndicate.directors", ["directors" => $directors]);
    }

    public function syndicate() {
        return view("system.syndicate.syndicate");
    }
}
