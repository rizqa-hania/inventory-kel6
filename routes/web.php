<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RuangController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Ruang
Route::get('/ruang', [RuangController::class, 'index'])->name('ruang.index'); // Tampilkan semua ruang
Route::get('/ruang/create', [RuangController::class, 'create'])->name('ruang.create'); // Form tambah ruang
Route::post('/ruang', [RuangController::class, 'store'])->name('ruang.store'); // Simpan ruang baru
Route::get('/ruang/{id}/edit', [RuangController::class, 'edit'])->name('ruang.edit'); // Form edit ruang
Route::put('/ruang/{id}', [RuangController::class, 'update'])->name('ruang.update'); // Update ruang
Route::delete('/ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy'); // Hapus ruang

// Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index'); // Tampilkan semua kategori
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create'); // Form tambah kategori
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store'); // Simpan kategori baru
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); // Form edit kategori
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update'); // Update kategori
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy'); // Hapus kategori

// Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index'); // Tampilkan semua barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create'); // Form tambah barang
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store'); // Simpan barang baru
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit'); // Form edit barang
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update'); // Update barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy'); // Hapus barang