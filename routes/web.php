<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\Auth\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para gestionar conductores
Route::resource('conductores', ConductorController::class);

// Rutas para el login del administrador
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
