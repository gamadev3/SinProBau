<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    public function index() {
        return view("home");
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
        return view("news");
    }

    public function contact() {
        return view("contact");
    }

    public function becomeAMember() {
        return view("become-a-member");
    }
}
