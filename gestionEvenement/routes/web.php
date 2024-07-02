<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;


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
//
Route::resource('evenements.store', EvenementController::class);
// route vers le dashboard layouts
Route::resource('dashboard-association', AssociationController::class);


Route::get('evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name('evenements.edit');
Route::put('evenements/{evenement}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
