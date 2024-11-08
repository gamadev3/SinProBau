<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\FirebaseAuthMiddleware;

Route::get("/", [IndexController::class, "index"]);

Route::get("/conventions/basic-education", [IndexController::class, "basicEducation"]);
Route::get("/conventions/higher-education", [IndexController::class, "higherEducation"]);
Route::get("/conventions/sesi-senai", [IndexController::class, "sesiSenai"]);
Route::get("/conventions/senac", [IndexController::class, "senac"]);

Route::get("/syndicate/about", [IndexController::class, "syndicateAbout"]);
Route::get("/syndicate/directors", [IndexController::class, "syndicateDirectors"]);

Route::get("/virtual-card", [IndexController::class, "virtualCard"]);

Route::get("/news", [NewsController::class, "news"]);
Route::get("/notice/{id}", [NewsController::class, "notice"]);

Route::get("/contact", [IndexController::class, "contact"]);
Route::get("/become-a-member", [IndexController::class, "becomeAMember"]);

Route::get("/credits", [IndexController::class, "credits"]);

Route::get("/login", [IndexController::class, "login"]);

Route::post("/authentication", [FirebaseAuthController::class, "authentication"]);

Route::middleware([FirebaseAuthMiddleware::class])->group(function () {
    Route::get("/system", [IndexController::class, "system"]);
    Route::post("/logout", [FirebaseAuthController::class, "logout"]);

    Route::get("/news-form", [NewsController::class, "newsForm"]);
    Route::post("/register-news", [NewsController::class, "registerNews"]);

    Route::get("/news-update-form/{id}", [NewsController::class, "newsUpdateForm"]);
    Route::post("/news-update/{id}", [NewsController::class, "newsUpdate"]);

    Route::post("/news-delete/{id}", [NewsController::class, "newsDelete"]);
});
