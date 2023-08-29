<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\UserMenuController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/databarang', DataBarangController::class);
Route::resource('/datatransaksi', DataTransaksiController::class);
Route::resource('/datapembayaran', DataPembayaranController::class);
Route::resource('/datauser', DataUserController::class);

// User Menu
Route::resource('/usermenu', UserMenuController::class);

// Pemilik/Owner Menu
Route::resource('/laporanpenjualan', LaporanPenjualanController::class);
Route::view('laporan','');