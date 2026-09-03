<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\Kategori;
use App\Ekonomis;
use App\Ruang;
use App\User;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard
     */
    public function index()
    {
        // Mengambil jumlah seluruh data
        $jumlahBarang = Barang::count();
        $jumlahRuang = Ruang::count();
        $jumlahKategori = Kategori::count();
        $jumlahMasa = Ekonomis::count();
        $jumlahUser = User::count();

        // Mengirim data ke halaman dashboard
        return view('dashboard.index', compact(
            'jumlahBarang',
            'jumlahRuang',
            'jumlahKategori',
            'jumlahMasa',
            'jumlahUser'
        ));
    }
}