<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruang')->insert([
            [
                'nama_ruang' => 'Lab 1',
                'deskripsi' => 'Lab komputer',
            ],

            [
                'nama_ruang' => 'Lab 2',
                'deskripsi' => 'Lab komputer',
            ],

            [
                'nama_ruang' => 'Lab 3',
                'deskripsi' => 'Lab komputer',
            ],

            [
                'nama_ruang' => 'Lab 4',
                'deskripsi' => 'Lab komputer',
            ],
        ]);

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
