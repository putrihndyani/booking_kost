<?php

use App\Http\Controllers\BookingKamarController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Models\BookingKamar;
use Illuminate\Support\Facades\Route;

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
    return view('admin.admin');
});

Route::resource('datakamar', KamarController::class);
Route::resource('tipekamar', TipeKamarController::class);
Route::resource('bookingkamar', BookingKamarController::class);
