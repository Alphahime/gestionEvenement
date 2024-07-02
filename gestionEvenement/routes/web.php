<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});

// Route vers page index.blade.php  
Route::resource('evenements', EvenementController::class);
//
Route::resource('evenements.store', EvenementController::class);
// route vers le dashboard layouts
Route::resource('dashboard-association', AssociationController::class);

Route::get('evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name('evenements.edit');
Route::put('evenements/{evenement}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
