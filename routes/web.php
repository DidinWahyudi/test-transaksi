<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\TransaksiController;

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

//login
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//beranda
Route::get('/home', [HomeController::class, 'index'])->name('home');

//barang
Route::resource('/barang', BarangController::class);
Route::get('/barang', [BarangController::class, 'index'])->name('barang');

//transaski
Route::resource('/transaksi', TransaksiController::class);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');

//transaski
Route::resource('/filter', FilterController::class);
Route::get('/filter', [FilterController::class, 'index'])->name('filter');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
