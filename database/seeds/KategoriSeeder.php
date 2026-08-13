<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'kategori_barang' => 'Furniture',
                'deskripsi' => 'Barang berupa perabotan yang digunakan untuk menunjang kegiatan di sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_barang' => 'Elektronik',
                'deskripsi' => 'Barang elektronik yang digunakan untuk mendukung kegiatan pembelajaran dan pekerjaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_barang' => 'ATK',
                'deskripsi' => 'Alat tulis dan perlengkapan kantor yang digunakan untuk kegiatan administrasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}