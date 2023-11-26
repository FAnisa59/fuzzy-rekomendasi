<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserMasukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailMenuController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\FuzzyController;
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
    return view('admin/login_admin');

});

// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });s

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/login_admin', [AdminController::class, 'index'])->name('login');
Route::post('/login_admin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::get('/perhitungan', [FuzzyController::class, 'index'])->name('perhitungan');
Route::get('/masuk', [UserMasukController::class, 'pelanggan'])->name('pelanggan');
Route::post('user/masuk', [UserMasukController::class, 'loginuser'])->name('loginuser')->middleware('web');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::delete('/hapus-menu/{id?}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::post('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::delete('/hapus-pemesanan/{id?}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');
Route::get('/order_detail', [OrderDetailController::class, 'index'])->name('order_details');

Route::get('/rating', [RatingController::class, 'index'])->name('rating');

Route::get('/detail_menu/{id}', [DetailMenuController::class, 'index'])->name('detail_menu');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::get('/rekomendasi/create', [RekomendasiController::class, 'create'])->name('rekomendasi.create');
Route::post('/rekomendasi/store', [RekomendasiController::class, 'store'])->name('rekomendasi.store');

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::delete('/hapus-pelanggan', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');