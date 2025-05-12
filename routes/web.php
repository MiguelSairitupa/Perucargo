<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConductorController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para gestionar conductores
Route::resource('conductores', ConductorController::class);
