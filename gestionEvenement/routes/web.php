<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;

use App\Http\Controllers\EvenementController;


Route::get('/', function () {
    return view('welcome');
});
/* page du formulaire*/
Route::resource('evenements', EvenementController::class);

/* page d'acceuil*/

Route::resource('evenements.acceuil', EvenementController::class);


/* page de sauvegarde*/
Route::resource('evenements.store', EvenementController::class);

/*page detail*/
Route::resource('evenements.show', EvenementController::class);



Route::resource('dashboard-association', AssociationController::class);

