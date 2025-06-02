<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\FeedbackController;

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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('siswa',SiswaController::class);
Route::resource('konselor',KonselorController::class);
Route::resource('konseling',KonselingController::class);
Route::resource('feedback',FeedbackController::class);

