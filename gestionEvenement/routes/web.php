<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);


Route::resource('authuser', AuthController::class);


Route::resource('association', AssociationController::class);


Route::resource('admin', AdminController::class);


Route::resource('evenements', EvenementController::class);


Route::get('/landing', [EvenementController::class, 'landingPage'])->name('landing');


Route::get('/evenements/{evenement}/details', [EvenementController::class, 'showDetails'])->name('evenements.details');


Route::resource('reservations', ReservationController::class);
Route::get('/reservations/confirmed', [ReservationController::class, 'confirmed'])->name('reservations.confirmed');
