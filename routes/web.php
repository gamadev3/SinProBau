<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ConventionsController;
use App\Http\Controllers\SyndicateController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CarouselController;
use App\Http\Middleware\FirebaseAuthMiddleware;

Route::get("/", [IndexController::class, "index"]);
Route::get("/carteirinha-virtual", [IndexController::class, "virtualCard"]);
Route::get('/convenios', [IndexController::class, "covenants"]);
Route::get("/contato", [IndexController::class, "contact"]);
Route::post("/enviar-email-contato", [IndexController::class, "sendContactEmail"]);
Route::get("/seja-socio", [IndexController::class, "becomeAMember"]);
Route::post("/enviar-email-seja-socio", [IndexController::class, "sendEmail"]);

Route::get("/convencoes/educacao-basica", [ConventionsController::class, "basicEducation"]);
Route::get("/convencoes/ensino-superior", [ConventionsController::class, "higherEducation"]);
Route::get("/convencoes/sesi-senai", [ConventionsController::class, "sesiSenai"]);
Route::get("/convencoes/senac", [ConventionsController::class, "senac"]);
Route::get("/convencoes/apae", [ConventionsController::class, "apae"]);

Route::get("/sindicato", [SyndicateController::class, "syndicate"]);

Route::get("/noticias", [NewsController::class, "news"]);
Route::get("/noticia/{id}", [NewsController::class, "notice"]);

Route::get("/login", [FirebaseAuthController::class, "login"]);
Route::post("/autenticar", [FirebaseAuthController::class, "authentication"]);

Route::middleware([FirebaseAuthMiddleware::class])->group(function () {
    Route::get("/sistema", [FirebaseAuthController::class, "system"]);
    Route::post("/deslogar", [FirebaseAuthController::class, "logout"]);

    // Tela de exibição das convenções
    Route::get("/sistema/educacao-basica", [ConventionsController::class, "basicEducationSystem"]);
    Route::get("/sistema/ensino-superior", [ConventionsController::class, "higherEducationSystem"]);
    Route::get("/sistema/sesi-senai", [ConventionsController::class, "sesiSenaiSystem"]);
    Route::get("/sistema/senac", [ConventionsController::class, "senacSystem"]);
    Route::get("/sistema/apae", [ConventionsController::class, "apaeSystem"]);

    // CRUD das convenções
    Route::get("/sistema/convencao-formulario/{type}", [ConventionsController::class, "conventionForm"]);
    Route::post("/sistema/registrar-convencao", [ConventionsController::class, "conventionRegister"]);
    Route::get("/sistema/convencao-formulario-atualizacao/{id}", [ConventionsController::class, "conventionUpdateForm"]);
    Route::post("/sistema/atualizar-convencao/{id}", [ConventionsController::class, "conventionUpdate"]);
    Route::post("/sistema/deletar-convencao/{id}", [ConventionsController::class, "conventionDelete"]);

    // Tela de exibição do sindicato
    Route::get("/sistema/sindicato", [SyndicateController::class, "systemSyndicateDirectors"]);

    // CRUD do sindicato
    Route::post("/sistema/sindicato-atualizar-vigencia", [SyndicateController::class, "syndicateDurationUpdate"]);
    Route::get("/sistema/sindicato-formulario", [SyndicateController::class, "syndicateForm"]);
    Route::post("/sistema/registrar-diretor", [SyndicateController::class, "directorRegister"]);
    Route::get("/sistema/diretor-formulario-atualizacao/{id}", [SyndicateController::class, "directorUpdateForm"]);
    Route::post("/sistema/atualizar-diretor/{id}", [SyndicateController::class, "directorUpdate"]);
    Route::post("/sistema/deletar-diretor/{id}", [SyndicateController::class, "directorDelete"]);

    // Tela de exibição das notícias
    Route::get("/sistema/noticias", [NewsController::class, "systemNews"]);

    // CRUD das notícias
    Route::get("/sistema/noticia-formulario", [NewsController::class, "noticeForm"]);
    Route::post("/sistema/registrar-noticia", [NewsController::class, "noticeRegister"]);
    Route::get("/sistema/noticia-formulario-atualizacao/{id}", [NewsController::class, "noticeUpdateForm"]);
    Route::post("/sistema/atualizar-noticia/{id}", [NewsController::class, "noticeUpdate"]);
    Route::post("/sistema/deletar-noticia/{id}", [NewsController::class, "noticeDelete"]);

    // Tela de exibição do carrossel
    Route::get("/sistema/carrossel", [CarouselController::class, "systemCarousel"]);

    // CRUD do carrossel
    Route::get("/sistema/imagem-carrossel-formulario", [CarouselController::class, "carouselImageForm"]);
    Route::post("/sistema/registrar-imagem-carrossel", [CarouselController::class, "carouselImageRegister"]);
    Route::get("/sistema/imagem-carrossel-formulario-atualizacao/{id}", [CarouselController::class, "carouselUpdateForm"]);
    Route::post("/sistema/atualizar-imagem-carrossel/{id}", [CarouselController::class, "carouselImageUpdate"]);
    Route::post("/sistema/deletar-imagem-carrossel/{id}", [CarouselController::class, "carouselImageDelete"]);
});
