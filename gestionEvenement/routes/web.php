<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Evenement;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// authentification user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

// route pour afficher le formulaire d'inscription pour le user simple
Route::resource('users', UserController::class);

// route pour la gestion de l'authentification
Route::resource('authuser', AuthController::class);
// route pour les associations
Route::resource('association',AssociationController::class);
// route des admins
Route::resource('admin', AdminController::class);

// routes pour authentification association
Route::get('connexion',[AuthController::class,'create']);
Route::post('verification_connexion',[AuthController::class,'store']);
// deconnexion des associations
Route::post('deconnexion', [AuthController::class, 'deconnexion'])->name('association.logout');


// Route vers page index.blade.php  
Route::resource('evenements', EvenementController::class);
// Route::resource('evenements.store', EvenementController::class);

Route::resource('role', RoleController::class);
Route::resource('dashboard-association', AssociationController::class);

// route pour afficher les evenements dans le dashbord de l'admin
Route::get('evenements_admin',[EvenementController::class,'afficher']);
Route::get('supprimer_evenement/{id}',[EvenementController::class,'suppression']);

// route pour la desactivation du compte de l'association
Route::post('desactivation/{id}', [EvenementController::class, 'deactivation'])->name('desactivation');
Route::post('activation/{id}', [EvenementController::class, 'activation'])->name('activation');



// Route::resource('evenements', EvenementController::class)->only(['edit', 'update', 'destroy']);
// Route::resource('evenements', EvenementController::class);
