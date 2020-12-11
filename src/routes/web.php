<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\CekinController;
use App\Http\Controllers\CekoutController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TentangController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kamar/form',[KamarController::class,'tampilform'])
    ->name("kamar.form");

Route::get('/pemesanan',[PemesananController::class,'tampilpemesanan'])
    ->name("pemesanan");
Route::get('/pemesanan/form',[PemesananController::class,'tampilform'])
    ->name("pemesanan.form");

Route::get('/tentang',[TentangController::class,'tampiltentang'])
    ->name("tentang");

Route::get('/pengunjung',[PengunjungController::class,'tampilpengunjung'])
    ->name("pengunjung");
Route::get('/pengunjung/form',[PengunjungController::class,'tampilform'])
    ->name("pengunjung.form");
Route::view('/pengunjung/detail','pengunjung.detail')
    ->name("pengunjung.detail");

Route::get('/cekin',[CekinController::class,'tampilcekin'])
    ->name("cekin");
Route::get('/cekin/form',[CekinController::class,'tampilform'])
    ->name("cekin.form");

Route::get('/cekout',[CekoutController::class,'tampilcekout'])
    ->name("cekin");
Route::get('/cekout/form',[CekoutController::class,'tampilform'])
    ->name("cekout.form");

Route::get('/karyawan',[KaryawanController::class,'tampilkaryawan'])
    ->name("karyawan");
Route::get('/karyawan/form',[KaryawanController::class,'tampilform'])
    ->name("karyawan.form");
Route::view('/karyawan/detail','karyawan.detail')
    ->name("karyawan.detail");
