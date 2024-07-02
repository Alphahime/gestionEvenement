<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});


// route pour afficher le formulaire d'inscription pour le user simple
Route::resource('users', UserController::class);

// route pour la gestion de l'authentification
Route::resource('authuser', AuthController::class);
// route pour les associations
Route::resource('association',AssociationController::class);
// route des admins
Route::resource('admin', AdminController::class);

// Route vers page index.blade.php  
Route::resource('evenements', EvenementController::class);
Route::resource('evenements.store', EvenementController::class);


Route::resource('dashboard-association', AssociationController::class);


Route::resource('evenements', EvenementController::class)->only(['edit', 'update', 'destroy']);

/* afficher reservations */

Route::resource('reservations', ReservationController::class);