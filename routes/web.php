<?php

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

Route::controller(\App\Http\Controllers\UserController::class)->group(function(){
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::get('/register', 'register')->middleware(\App\Http\Middleware\OnlyAdminMiddleware::class);
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/register', 'registerUser')->middleware(\App\Http\Middleware\OnlyAdminMiddleware::class);
    Route::post('/logout', 'logout')->middleware('auth');
});