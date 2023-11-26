<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RfidDataController;
use App\Http\Controllers\SensorDataController;
use App\Http\Controllers\ChartController;
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

//Pemantauan Lingkungan
Route::get('/sensor-data/create', [SensorDataController::class, 'create'])->name('sensor-data.create');
Route::post('/sensor-data/store', [SensorDataController::class, 'store'])->name('sensor-data.store');
Route::get('/sensor', function () {
    return view('testunit.sensor');
})->middleware('auth');

//Grafik
Route::get('/get-sensor-data', [ChartController::class, 'getSensorData']);

//RFID
Route::get('/rfid', function () {
    return view('ternak.testrfid');
})->middleware('auth');
Route::post('/rfid-data', [RfidDataController::class, 'store'])->name('rfid-data.store')->middleware('auth');
Route::get('/latest-ternak', [RfidDataController::class, 'getLatestRfidAndShowTernak'])->name('latest-ternak')->middleware('auth');

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
    Route::post('/profile/update/{id}', 'update')->middleware('auth');
    
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
    Route::get('/ternak', 'search');
    Route::get('/pindai', function () {
        return view('ternak.rfid');
    })->middleware('auth');
    
});

Route::controller(\App\Http\Controllers\KandangController::class)->group(function(){
    // Main Kandang page
    Route::get('/kandang', 'index')->middleware('auth');

    // Route for pindahkandang.blade.php
    Route::get('/kandang/pindah', function () {
        return view('kandang.pindahkandang');
    })->middleware('auth');

    // Route for input.blade.php
    Route::get('/kandang/input', function () {
        return view('kandang.input');
    })->middleware('auth');
    Route::get('/kandang/assign', function () {
        return view('kandang.assign');
    })->middleware('auth');
});


Route::controller(\App\Http\Controllers\NotifController::class)->group(function(){
    Route::post('/notif/add', 'add')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
});

Route::controller(\App\Http\Controllers\RiwayatController::class)->group(function(){
    Route::get('/riwayat/kesehatan', 'kesehatan')->middleware('auth');
    Route::get('/riwayat/kawin', 'kawin')->middleware('auth');
    Route::get('/riwayat/lahir', 'lahir')->middleware('auth');
    Route::get('/riwayat/kesehatan/{id}/input', 'inputRiwayatKesehatan')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::get('/riwayat/lahir/input', 'inputRiwayatLahir')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::get('/riwayat/kawin/input', 'inputRiwayatKawin')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::post('/riwayat/kesehatan/add', 'addRiwayatKesehatan')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::post('/riwayat/kawin/add', 'addRiwayatKawin')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
    Route::post('/riwayat/lahir/add', 'addRiwayatLahir')->middleware([
        \App\Http\Middleware\NotEmployeeMiddleware::class,
        'auth',
    ]);
});

Route::fallback(function(){
    return view('error.custom');
});

