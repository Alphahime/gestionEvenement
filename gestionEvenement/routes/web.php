<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});

/*evenements*/

Route::resource('evenements', EvenementController::class);
Route::resource('evenements.store', EvenementController::class);



/*admin*/

Route::resource('admins', AdminController::class);