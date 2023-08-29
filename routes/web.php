<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LandingPageController;
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

//landingpage 
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/invoice', [CheckoutController::class, 'invoice'])->name('invoice');
Route::get('/confirm', [CheckoutController::class, 'confirm'])->name('confirm');
Route::post('/storeconfirm', [CheckoutController::class, 'storeconfirm'])->name('storeconfirm');
Route::post('/storepenjualan', [CheckoutController::class, 'storepenjualan'])->name('storepenjualan');
Route::get('/register', [LandingPageController::class, 'register'])->name('register');

// admin menu
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