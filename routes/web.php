<?php

use App\Http\Controllers\BookingController;
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
    return view('welcome');
});

Route::resource('/booking', BookingController::class);

Route::post('/booking/submit', 'BookingController@store')->name('booking.submit');

Route::delete('/booking/{id}', 'BookingController@destroy')->name('booking.destroy');

Route::put('/booking/{booking}', 'BookingController@update')->name('booking.update');