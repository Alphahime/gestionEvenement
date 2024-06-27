<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;

Route::resource('dashboard-association', AssociationController::class);
