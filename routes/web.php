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



Route::get('/chat', [AdminController::class, 'pesan']);

Route::get('/lamaran', [AdminController::class, 'lamar']);

Route::get('/selengkapnya', [AdminController::class, 'info']);

Route::post('/monitor-info/{id}', [LamarController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homee', function () {
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



Route::get('/registrasi', function () {
    return view('register');
});



Route::post('/register-user', [AuthController::class, 'register'])->name('register-user');

Route::controller(AuthController::class)->group(function () {
    Route::get('/log-in', 'index');
    Route::post('/log-in', 'login')->name('login-user');
    Route::get('/logout', 'logout')->name('logout');
});


Route::get('auth/google',[App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[App\Http\Controllers\GoogleController::class,'handleGoogleCallback'])->name('google.callback');



Route::get('/administrator', [JenispekerjaanController::class, 'admin']);

Route::get('/pekerjaan', [JenispekerjaanController::class, 'index']);
Route::get('/pekerjaan/show/{id}', [JenispekerjaanController::class, 'show'])->name('pekerjaan.show');
Route::get('/pekerjaan/edit/{id}', [JenispekerjaanController::class, 'edit'])->name('pekerjaan.edit');
Route::delete('/pekerjaan/delete/{id}', [JenispekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');
Route::put('/update-pekerjaan/{id}', [JenispekerjaanController::class, 'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [JenispekerjaanController::class, 'user']);
Route::get('edit_user/{id}', [JenispekerjaanController::class,'edit_user']);
Route::get('hapus/{id}', [JenispekerjaanController::class, 'hapus']);
Route::put('update_user/{id}', [JenispekerjaanController::class, 'update_user'])->name('update-user');
Route::post('insert_user', [JenispekerjaanController::class,'insert_user']);


Route::get('/populer', [JenispekerjaanController::class, 'populer']);
Route::get('delete_populer/{id}', [JenispekerjaanController::class, 'delete_populer']);
Route::post('/insertpopuler', [JenispekerjaanController::class, 'insert']);
Route::get('update_populer/{id}', [JenispekerjaanController::class, 'update_populer']);
Route::get('show_populer/{id}', [JenispekerjaanController::class, 'show_populer']);
Route::put('/procces_update_populer/{id}', [JenispekerjaanController::class, 'procces_update_populer']);


Route::get('/form', [JenispekerjaanController::class, 'formulir']);

Route::get('/delete_form/{id}', [JenispekerjaanController::class, 'delete_form']);
Route::get('/show_form/{id}', [JenispekerjaanController::class, 'show_form']);
