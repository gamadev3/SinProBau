<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ConventionsController;
use App\Http\Controllers\SyndicateController;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\FirebaseAuthMiddleware;

Route::get("/", [IndexController::class, "index"]);
Route::get("/virtual-card", [IndexController::class, "virtualCard"]);
Route::get("/contact", [IndexController::class, "contact"]);
Route::get("/credits", [IndexController::class, "credits"]);
Route::get("/syndicate/about", [IndexController::class, "syndicateAbout"]);
Route::get("/syndicate/directors", [IndexController::class, "syndicateDirectors"]);
Route::get("/become-a-member", [IndexController::class, "becomeAMember"]);

Route::get("/conventions/basic-education", [ConventionsController::class, "basicEducation"]);
Route::get("/conventions/higher-education", [ConventionsController::class, "higherEducation"]);
Route::get("/conventions/sesi-senai", [ConventionsController::class, "sesiSenai"]);
Route::get("/conventions/senac", [ConventionsController::class, "senac"]);

Route::get("/news", [NewsController::class, "news"]);
Route::get("/notice/{id}", [NewsController::class, "notice"]);

Route::get("/login", [FirebaseAuthController::class, "login"]);
Route::post("/authentication", [FirebaseAuthController::class, "authentication"]);

Route::middleware([FirebaseAuthMiddleware::class])->group(function () {
    Route::get("/system", [FirebaseAuthController::class, "system"]);
    Route::post("/logout", [FirebaseAuthController::class, "logout"]);

    Route::get("/system/basic-education", [ConventionsController::class, "basicEducationSystem"]);
    Route::get("/system/higher-education", [ConventionsController::class, "higherEducationSystem"]);
    Route::get("/system/sesi-senai", [ConventionsController::class, "sesiSenaiSystem"]);
    Route::get("/system/senac", [ConventionsController::class, "senacSystem"]);

    Route::get("/system/convention-form/{type}", [ConventionsController::class, "conventionForm"]);
    Route::post("/system/register-convention", [ConventionsController::class, "registerConvention"]);
    Route::get("/system/convention-update-form/{id}", [ConventionsController::class, "conventionUpdateForm"]);
    Route::post("/system/convention-update/{id}", [ConventionsController::class, "conventionUpdate"]);
    Route::post("/system/convention-delete/{id}", [ConventionsController::class, "conventionDelete"]);

    Route::get("/system/syndicate", [SyndicateController::class, "syndicate"]);

    Route::get("/system/news", [NewsController::class, "systemNews"]);

    Route::get("/system/notice-form", [NewsController::class, "noticeForm"]);
    Route::post("/system/register-notice", [NewsController::class, "registerNotice"]);
    Route::get("/system/notice-update-form/{id}", [NewsController::class, "noticeUpdateForm"]);
    Route::post("/system/notice-update/{id}", [NewsController::class, "noticeUpdate"]);
    Route::post("/system/notice-delete/{id}", [NewsController::class, "noticeDelete"]);
});
