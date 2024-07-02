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


Route::resource('evenements', EvenementController::class);
Route::resource('evenements.store', EvenementController::class);


Route::resource('dashboard-association', AssociationController::class);


Route::resource('evenements', EvenementController::class)->only(['edit', 'update', 'destroy']);