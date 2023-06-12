<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LamarController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\JenispekerjaanController;
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

Route::post('/monitor-info/{id}', [LamarController::class, 'store']);

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

Route::get('/administrator', [JenispekerjaanController::class, 'admin']);

Route::get('/pekerjaan', [JenispekerjaanController::class, 'index']);
Route::get('/pekerjaan/show/{id}', [JenispekerjaanController::class, 'show'])->name('pekerjaan.show');
Route::get('/pekerjaan/edit/{id}', [JenispekerjaanController::class, 'edit'])->name('pekerjaan.edit');
Route::delete('/pekerjaan/delete/{id}', [JenispekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');
Route::put('/update-pekerjaan/{id}', [JenispekerjaanController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
