<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;

// Route untuk autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Route utama setelah login
    Route::get('/', [AnakController::class, 'index'])->name('home');

    // Route untuk anak
    Route::resource('anak', AnakController::class);

    // Route untuk obat
    Route::resource('obat', ObatController::class);
});
