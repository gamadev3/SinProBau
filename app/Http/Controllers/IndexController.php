<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller {
    public function index() {
        $trendingNotice = News::where("is_trending", "=", "1")->first();

        $salaryCampaign = News::where("salary_campaign", "=", "1")->get();

        return view("home", [
            "salaryCampaign" => $salaryCampaign,
            "trendingNotice" => $trendingNotice
        ]);
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

    public function sendEmail(Request $request) {
        try {
            $data = $request->all();

            Mail::to(env("MAIL_DESTINY"))
                ->send(new Email($data));

            return redirect()->back()->with("success", "Enviado com sucesso!");
        } catch (Exception $error) {
            return redirect()->back()->with("error", "Ocorreu um erro!");
        }
    }
}
