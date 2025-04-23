<?php

use App\Http\Controllers\BookConsultationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/home", fn() => redirect(route("home")));

Route::resource("book-consultation", BookConsultationController::class)
    ->only(["index", "store"]);
