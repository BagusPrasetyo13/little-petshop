<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPesananController;
use App\Http\Controllers\BarangIndex;
use App\Http\Controllers\KategoriBarang;
use App\Http\Controllers\DashboardKategori;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/product-index', [BarangIndex::class, 'index'])->middleware('auth');

Route::get('/kategori/{kategori:nama}', [KategoriBarang::class, 'barang_kategori'])->middleware('auth');

Route::get('auth/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('auth/login', [LoginController::class, 'authenticate']);

Route::get('dashboard/index', [HomeController::class, 'adminHome'])->name('dashboard.index')->middleware('is_admin');
Route::resource('/dashboard/produk', DashboardAdminController::class)->middleware('is_admin');
Route::resource('/dashboard/pesanan', DashboardPesananController::class)->middleware('is_admin');
Route::resource('/dashboard/kategori', DashboardKategori::class)->middleware('is_admin');
//Route::resource('/dashboard/user', DashboardUserController::class)->middleware('is_admin');

Route::get('/barangs/kategori/{kategoriId}', [App\Http\Controllers\KategoriBarang::class])->middleware('auth')->name('barangs.kategori');
Route::get('/barangs/{Id}', [App\Http\Controllers\BarangDetail::class])->middleware('auth')->name('barangs.detail');

Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);

Route::get('checkout', [App\Http\Controllers\PesanController::class, 'checkout']);
Route::delete('checkout/{id}', [App\Http\Controllers\PesanController::class, 'delete']);

Route::get('konfirmasi_checkout', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);
