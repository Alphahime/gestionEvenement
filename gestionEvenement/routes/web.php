<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;



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
// route pour admin
Route::resource('admin',AdminController::class);
// route pour association
Route::resource('association',AssociationController::class);
// route pour les users
Route::resource('users',UserController::class);
// authentification association
Route::get('connexion',[AuthController::class,'create']);
Route::post('verification_connexion',[AuthController::class,'store']);
Route::resource('role',RoleController::class);
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
