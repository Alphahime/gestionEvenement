<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authentification user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Resources
Route::resource('users', UserController::class);
Route::resource('authuser', AuthController::class);
Route::resource('association', AssociationController::class);
Route::resource('admin', AdminController::class);
Route::resource('role', RoleController::class);
Route::resource('dashboard-association', AssociationController::class);

// Routes spécifiques
Route::get('/landing', [EvenementController::class, 'landingPage'])->name('landing');
Route::get('connexion', [AuthController::class, 'create']);
Route::post('verification_connexion', [AuthController::class, 'store']);
Route::post('deconnexion', [AuthController::class, 'deconnexion'])->name('association.logout');

// Routes protégées pour les associations
Route::middleware('auth:association')->group(function () {
    Route::resource('evenements', EvenementController::class);
    Route::get('evenements_admin', [EvenementController::class, 'afficher']);
    Route::get('supprimer_evenement/{id}', [EvenementController::class, 'suppression']);
    Route::get('/evenements/{evenement}/details', [EvenementController::class, 'showDetails'])->name('evenements.details');
    Route::resource('reservations', ReservationController::class);
    Route::get('/reservations/confirmed', [ReservationController::class, 'confirmed'])->name('reservations.confirmed');
    Route::post('desactivation/{id}', [EvenementController::class, 'deactivation'])->name('desactivation');
    Route::post('activation/{id}', [EvenementController::class, 'activation'])->name('activation');
    Route::get('mes_reservations', [ReservationController::class, 'reservation']);
    Route::get('profil_user', [UserController::class, 'profil']);
    Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');
});
