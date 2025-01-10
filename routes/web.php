<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\ObatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AnakController::class, 'index']);

Route::resource('anak', AnakController::class);
Route::resource('obat', ObatController::class);
