<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Ruang;
use App\Models\Jenis;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $ruang = Ruang::all();
        $jenis = Jenis::all();

        Barang::create([
            'nama_barang' => 'Komputer',
            'merk' => 'Lenovo',
            'jumlah' => 10,
            'ruang_id' => $ruang[0]->ruang_id,
            'jenis_id' => $jenis[0]->jenis_id,
            'status' => 'baik',
        ]);

        Barang::create([
            'nama_barang' => 'Printer',
            'merk' => 'Epson',
            'jumlah' => 3,
            'ruang_id' => $ruang[0]->ruang_id,
            'jenis_id' => $jenis[1]->jenis_id,
            'status' => 'rusak ringan',
        ]);

        Barang::create([
            'nama_barang' => 'Proyektor',
            'merk' => 'Epson',
            'jumlah' => 2,
            'ruang_id' => $ruang[1]->ruang_id,
            'jenis_id' => $jenis[0]->jenis_id,
            'status' => 'rusak berat',
        ]);

        Barang::create([
            'nama_barang' => 'Keyboard',
            'merk' => 'Logitech',
            'jumlah' => 15,
            'ruang_id' => $ruang[1]->ruang_id,
            'jenis_id' => $jenis[1]->jenis_id,
            'status' => 'dalam perbaikan',
        ]);

        Barang::create([
            'nama_barang' => 'Mouse',
            'merk' => 'Logitech',
            'jumlah' => 15,
            'ruang_id' => $ruang[2]->ruang_id,
            'jenis_id' => $jenis[0]->jenis_id,
            'status' => 'tidak digunakan',
        ]);
    }
}