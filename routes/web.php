<?php

use App\Http\Controllers\BookConsultationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/home", fn() => redirect(route("home")));

Route::resource("book-consultation", BookConsultationController::class)
    ->only(["index", "store"]);

Route::get('/language/{locale}', [LanguageController::class, 'change'])
    ->name('changeLanguage');
