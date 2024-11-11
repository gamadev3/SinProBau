<?php

namespace App\Http\Controllers;

use App\Models\News;

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

    public function credits() {
        return view("credits");
    }
}
