<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

Route::get('/', [UserController::class, 'index'])->name('accueil');
Route::get('/mentions', [UserController::class, 'mentions'])->name('mentions');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

Route::get('/profil', function () {
    return view('profil');
});
