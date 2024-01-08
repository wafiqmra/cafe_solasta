<?php

use App\Http\Controllers\DrinksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastriesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::resource("/home", HomeController::class);
Route::get('/pastries', [PastriesController::class, 'index'])->name('pastries.index');
Route::get('/drinks', [DrinksController::class, 'index'])->name('drinks.index');

Route::resource('/booking', BookingController::class);

Route::post('/booking/submit', 'BookingController@store')->name('booking.submit');

Route::delete('/booking/{id}', 'BookingController@destroy')->name('booking.destroy');