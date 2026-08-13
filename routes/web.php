<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MasaController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\UserController;
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

// landing page
Route::get('/', function () {return view('landing page.index');});

// login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'proseslogin'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard 
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard.index');

// Ruang
Route::get('/ruang', [RuangController::class, 'index'])->name('ruang.index'); // Tampilkan semua ruang
Route::get('/ruang/create', [RuangController::class, 'create'])->name('ruang.create'); // Form tambah ruang
Route::post('/ruang', [RuangController::class, 'store'])->name('ruang.store'); // Simpan ruang baru
Route::get('/ruang/{id}/edit', [RuangController::class, 'edit'])->name('ruang.edit'); // Form edit ruang
Route::put('/ruang/{id}', [RuangController::class, 'update'])->name('ruang.update'); // Update ruang
Route::delete('/ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy'); // Hapus ruang

// Jenis
Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index'); // Tampilkan semua Jenis
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create'); // Form tambah Jenis
Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store'); // Simpan Jenis baru
Route::get('/jenis/{id}/edit', [JenisController::class, 'edit'])->name('jenis.edit'); // Form edit Jenis
Route::put('/jenis/{id}', [JenisController::class, 'update'])->name('jenis.update'); // Update Jenis
Route::delete('/jenis/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy'); // Hapus Jenis

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

// Masa Ekonomis
Route::get('/masa', [MasaController::class, 'index'])->name('masa.index'); // Tampilkan semua masa
Route::get('/masa/create', [MasaController::class, 'create'])->name('masa.create'); // Form tambah masa
Route::post('/masa', [MasaController::class, 'store'])->name('masa.store'); // Simpan masa baru
Route::get('/masa/{id}/edit', [MasaController::class, 'edit'])->name('masa.edit'); // Form edit masa
Route::put('/masa/{id}', [MasaController::class, 'update'])->name('masa.update'); // Update masa
Route::delete('/masa/{id}', [MasaController::class, 'destroy'])->name('masa.destroy'); // Hapus masa

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index'); // Tampilkan semua user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // Form tambah user
Route::post('/user', [UserController::class, 'store'])->name('user.store'); // Simpan user baru
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit'); // Form edit user
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update'); // Update user
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy'); // Hapus user