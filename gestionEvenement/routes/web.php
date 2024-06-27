<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('evenements', EvenementController::class);
Route::resource('evenements.store', EvenementController::class);

use App\Http\Controllers\AssociationController;

Route::resource('dashboard-association', AssociationController::class);

