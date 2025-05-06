<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BookConsultationController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/home", fn() => redirect(route("home")));
Route::get("/about-us", [AboutUsController::class, "index"])->name("aboutUs");
Route::get("/services", [ServicesController::class, "index"])->name("services");
Route::get("/faq", [FAQController::class, "index"])->name("faq");
Route::get("/cases", [CasesController::class, "index"])->name("cases");
Route::resource("book-consultation", BookConsultationController::class)
    ->only(["index", "store"]);

Route::get('/language/{locale?}', [LanguageController::class, 'change'])
    ->name('changeLanguage');

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
