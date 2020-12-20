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

Route::group(['middleware' => ['auth']], function() {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/kamar/form',[KamarController::class,'tampilform'])
    ->name("kamar.form");
Route::get('/kamar/hapus/{id}',[KamarController::class,'hapuskamar'])
    ->name("kamar.hapus");
Route::post('/kamar/create',[KamarController::class,'buatkamar'])
    ->name("kamar.create");

Route::get('/pemesanan',[PemesananController::class,'index'])
    ->name("pemesanan");
Route::get('/pemesanan/form',[PemesananController::class,'tampilform'])
    ->name("pemesanan.form");
Route::get('/pemesanan/hapus/{id}',[PemesananController::class,'hapuspemesanan'])
    ->name("pemesanan.hapus");
Route::post('/pemesanan/simpan',[PemesananController::class,'buatpemesanan'])
    ->name("pemesanan.simpan");

Route::get('/tentang',[TentangController::class,'tampiltentang'])
    ->name("tentang");

Route::get('/pengunjung',[PengunjungController::class,'index'])
    ->name('pengunjung');
Route::get('/pengunjung/form',[PengunjungController::class,'tampilform'])
    ->name("pengunjung.form");
Route::get('/pengunjung/hapus/{id}',[PengunjungController::class,'hapuspengunjung'])
    ->name("pengunjung.hapus");
Route::post('/pengunjung/simpan',[PengunjungController::class,'buatpengunjung'])
    ->name("pengunjung.simpan");

Route::get('/cekin',[CekinController::class,'index'])
    ->name("cekin");
Route::get('/cekin/form',[CekinController::class,'tampilform'])
    ->name("cekin.form");
Route::get('/cekin/hapus/{id}',[CekinController::class,'hapuscekin'])
    ->name("cekin.hapus");
Route::post('/cekin/simpan',[CekinController::class,'buatcekin'])
    ->name("cekin.simpan");

Route::get('/cekout',[CekoutController::class,'index'])
    ->name("cekout");
Route::get('/cekout/form',[CekoutController::class,'tampilform'])
    ->name("cekout.form");
Route::get('/cekout/hapus/{id}',[CekoutController::class,'hapuscekout'])
    ->name("cekout.hapus");
Route::post('/cekout/simpan',[CekoutController::class,'buatcekout'])
    ->name("cekout.simpan");


Route::get('/karyawan',[KaryawanController::class,'index'])
    ->name('karyawan');
Route::get('/karyawan/form',[KaryawanController::class,'tampilform'])
    ->name("karyawan.form");
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapuskaryawan'])
    ->name("karyawan.hapus");
Route::post('/karyawan/simpan',[KaryawanController::class,'buatkaryawan'])
    ->name("karyawan.simpan");


});