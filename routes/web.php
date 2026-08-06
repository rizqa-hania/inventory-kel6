<?php

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

Route::get('/ruang', [RuangController::class, 'index'])->name('ruang.index'); // Tampilkan semua kategori
Route::get('/ruang/create', [RuangController::class, 'create'])->name('ruang.create'); // Form tambah kategori
Route::post('/ruang', [RuangController::class, 'store'])->name('ruang.store'); // Simpan kategori baru
Route::get('/ruang/{id}/edit', [RuangController::class, 'edit'])->name('ruang.edit'); // Form edit kategori
Route::put('/ruang/{id}', [RuangController::class, 'update'])->name('ruang.update'); // Update kategori
Route::delete('/ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy'); // Hapus kategori