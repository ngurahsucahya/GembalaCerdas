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

Route::controller(\App\Http\Controllers\DashboardController::class)
    ->middleware('auth')->group(function(){
    Route::get('/', 'index');
    Route::redirect('/dashboard', '/');
});

Route::controller(\App\Http\Controllers\UserController::class)->group(function(){
   Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::get('/register', 'register')->middleware(\App\Http\Middleware\OnlyAdminMiddleware::class);
    Route::get('/profile', 'profile')->middleware('auth');
    Route::get('/profile/edit', 'edit')->middleware('auth')->name('profile.edit');
    Route::get('/register', 'register')->middleware([
        \App\Http\Middleware\OnlyAdminMiddleware::class,
        'auth',
    ]);
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/register', 'registerUser')->middleware(\App\Http\Middleware\OnlyAdminMiddleware::class);
    Route::post('/register', 'registerUser')->middleware([
        \App\Http\Middleware\OnlyAdminMiddleware::class,
        'auth',
    ]);
   Route::post('/logout', 'logout')->middleware('auth');
});

Route::controller(\App\Http\Controllers\TernakController::class)->group(function(){
    Route::get('/ternak', 'index')->middleware('auth');
    Route::get('/ternak/input', 'input')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::get('/ternak/edit/{id}', 'edit')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::post('/ternak/add', 'add')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::post('/ternak/update/{id}', 'update')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);;
    Route::delete('/ternak/delete/{id}', 'delete')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);;
    Route::get('/ternak/detail/{id}', 'detail')->middleware('auth');
});

Route::controller(\App\Http\Controllers\NotifController::class)->group(function(){
    Route::post('/notif/add', 'add')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
});

Route::controller(\App\Http\Controllers\RiwayatController::class)->group(function(){
    Route::get('/riwayat/kawin', 'kawin')->middleware('auth');
    Route::get('/riwayat/kawin/input', 'inputRkawin')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);;
    Route::post('/riwayat/kawin/add', 'addRkawin')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);;
});

Route::fallback(function(){
    return view('error.custom');
});