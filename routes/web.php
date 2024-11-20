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
Route::get("/become-a-member", [IndexController::class, "becomeAMember"]);
Route::post("/send-email", [IndexController::class, "sendEmail"]);

Route::get("/conventions/basic-education", [ConventionsController::class, "basicEducation"]);
Route::get("/conventions/higher-education", [ConventionsController::class, "higherEducation"]);
Route::get("/conventions/sesi-senai", [ConventionsController::class, "sesiSenai"]);
Route::get("/conventions/senac", [ConventionsController::class, "senac"]);

Route::get("/syndicate", [SyndicateController::class, "syndicate"]);

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
    Route::post("/system/convention-register", [ConventionsController::class, "conventionRegister"]);
    Route::get("/system/convention-update-form/{id}", [ConventionsController::class, "conventionUpdateForm"]);
    Route::post("/system/convention-update/{id}", [ConventionsController::class, "conventionUpdate"]);
    Route::post("/system/convention-delete/{id}", [ConventionsController::class, "conventionDelete"]);

    Route::get("/system/syndicate", [SyndicateController::class, "systemSyndicateDirectors"]);
    Route::post("/system/syndicate-update-duration", [SyndicateController::class, "syndicateDurationUpdate"]);
    Route::get("/system/syndicate-form", [SyndicateController::class, "syndicateForm"]);
    Route::post("/system/director-register", [SyndicateController::class, "directorRegister"]);
    Route::get("/system/director-update-form/{id}", [SyndicateController::class, "directorUpdateForm"]);
    Route::post("/system/director-update/{id}", [SyndicateController::class, "directorUpdate"]);
    Route::post("/system/director-delete/{id}", [SyndicateController::class, "directorDelete"]);

    Route::get("/system/news", [NewsController::class, "systemNews"]);

    Route::get("/system/notice-form", [NewsController::class, "noticeForm"]);
    Route::post("/system/notice-register", [NewsController::class, "noticeRegister"]);
    Route::get("/system/notice-update-form/{id}", [NewsController::class, "noticeUpdateForm"]);
    Route::post("/system/notice-update/{id}", [NewsController::class, "noticeUpdate"]);
    Route::post("/system/notice-delete/{id}", [NewsController::class, "noticeDelete"]);
});
