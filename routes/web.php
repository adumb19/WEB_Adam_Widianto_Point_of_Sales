<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Detail_penjualanController;
use App\Http\Controllers\Kategori_barangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//halaman pertama langsung mengarah ke login page
Route::get('/', [LoginController::class, 'index'])->name('index');
Route::get('login', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::resource('level', LevelController::class);
Route::resource('barang', BarangController::class);
Route::resource('kategori', Kategori_barangController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('detail_penjualan', Detail_penjualanController::class);
