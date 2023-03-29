<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/connexion/user', [userController::class , 'coucou']);

Route::get('/mentions', function () {
    return view('mentions');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profil', function () {
    return view('profil');
});
