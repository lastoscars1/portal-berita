<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UploadgambarController;
use App\Http\Controllers\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get('/login', [LoginController::class, 'halamanLogin'])->name('Login');
    Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postLogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

    

    Route::get('/', [berandaController::class, 'index']);
    Route::get('/beranda', [berandaController::class, 'index']);
    Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
    Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
    Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');
    Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
    Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
    Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
    Route::get('/cetak-pegawai', [PegawaiController::class, 'cetakPegawai'])->name('cetak-pegawai');
    Route::get('/cetak-data-pegawai-form', [PegawaiController::class, 'cetakForm'])->name('cetak-data-pegawai-form');
    Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}', [PegawaiController::class, 'cetakPegawaiPertanggal'])->name('cetak-data-pertanggal');

    Route::get('/data-gambar', [UploadgambarController::class, 'index'])->name('data-gambar');
    Route::get('/create-gambar', [UploadgambarController::class, 'create'])->name('create-gambar');
    Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar');
    Route::get('/edit-gambar/{id}', [UploadgambarController::class, 'edit'])->name('edit-gambar');
    Route::post('/update-gambar/{id}', [UploadgambarController::class, 'update'])->name('update-gambar');
    Route::get('/delete-gambar/{id}', [UploadgambarController::class, 'destroy'])->name('delete-gambar');
});

