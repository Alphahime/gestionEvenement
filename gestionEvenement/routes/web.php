<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD

=======
use App\Http\Controllers\EvenementController;
>>>>>>> a9351ed18ebb422561013d4025a7c48245fc1f71

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// route pour afficher le formulaire d'inscription pour le user simple
Route::resource('users', UserController::class);

// route pour la gestion de l'authentification
Route::resource('authuser', AuthController::class);
// route pour les associations
Route::resource('association',AssociationController::class);
=======

Route::resource('evenements', EvenementController::class);
Route::resource('evenements.store', EvenementController::class);

use App\Http\Controllers\AssociationController;

Route::resource('dashboard-association', AssociationController::class);

>>>>>>> a9351ed18ebb422561013d4025a7c48245fc1f71
