<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get("/", [IndexController::class, "index"]);

Route::get("/conventions/basic-education", [IndexController::class, "basicEducation"]);
Route::get("/conventions/higher-education", [IndexController::class, "higherEducation"]);
Route::get("/conventions/sesi-senai", [IndexController::class, "sesiSenai"]);
Route::get("/conventions/senac", [IndexController::class, "senac"]);

Route::get("/syndicate/about", [IndexController::class, "syndicateAbout"]);
Route::get("/syndicate/directors", [IndexController::class, "syndicateDirectors"]);

Route::get("/virtual-card", [IndexController::class, "virtualCard"]);
Route::get("/news", [IndexController::class, "news"]);
Route::get("/contact", [IndexController::class, "contact"]);
Route::get("/become-a-member", [IndexController::class, "becomeAMember"]);
