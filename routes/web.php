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
    Route::get("/system/news", [NewsController::class, "systemNews"]);

    Route::get("/system/basic-education-form", [IndexController::class, "basicEducationForm"]);
    Route::get("/system/higher-education-form", [IndexController::class, "higherEducationForm"]);
    Route::get("/system/sesc-senai-form", [IndexController::class, "sescSenaiForm"]);
    Route::get("/system/senac-form", [IndexController::class, "senacForm"]);

    Route::post("/logout", [FirebaseAuthController::class, "logout"]);

    Route::get("/notice-form", [NewsController::class, "noticeForm"]);
    Route::post("/register-notice", [NewsController::class, "registerNotice"]);

    Route::get("/notice-update-form/{id}", [NewsController::class, "noticeUpdateForm"]);
    Route::post("/notice-update/{id}", [NewsController::class, "noticeUpdate"]);

    Route::post("/notice-delete/{id}", [NewsController::class, "noticeDelete"]);
});
