<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// route pour afficher le formulaire d'inscription pour le user simple
Route::resource('users', UserController::class);

// route pour la gestion de l'authentification
Route::resource('authuser', AuthController::class);
// route pour les associations
Route::resource('association',AssociationController::class);