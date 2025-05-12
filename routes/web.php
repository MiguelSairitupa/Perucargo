<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConductorController;

Route::get('/', function () {
    Route::resource('conductores', ConductorController::class);
});
