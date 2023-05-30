<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PekerjaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(PekerjaanController::class)->group(function () {
    Route::get('/monitor', 'index');
    Route::post('/monitor', 'store')->name('post-pekerjaan');
    Route::get('/monitor/info/{id}', 'show');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('tentang');
});

Route::get('/buatcv', function () {
    return view('cv');
});

Route::get('/layanan', function () {
    return view('lk');
});

Route::get('/login', function () {
    return view('log');
});

Route::get('/registrasi', function () {
    return view('register');
});

Route::get('/chat', [AdminController::class, 'pesan']);

Route::get('/lamaran', [AdminController::class, 'lamar']);

Route::get('/selengkapnya', [AdminController::class, 'info']);
