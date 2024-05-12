<?php

use App\Http\Controllers\AreaManagement;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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
    return view('index');
});


Route::resource('search',SearchController::class);

Route::resource('login',LoginController::class);


Route::resource('books',BookingController::class);


Route::get('/', [DashboardController::class, 'index']);

Route::get('/getSubAreas', [AreaManagement::class, 'subArea']);

