<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

//Get ======================================================

Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'showForm'])->name('show-form');

Route::get('/show-data', [DataController::class, 'showData'])->name('show-data');

//Post =====================================================

Route::post('/clear-session', [DataController::class, 'clearSession'])->name('clear-session');

Route::post('/submit-form', [DataController::class, 'handleSubmit'])->name('submit-form');
