<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            [
                'jenis_barang' => 'meja',
                'deskripsi' => 'Meja belajar siswa untuk kegiatan pembelajaran di kelas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'jenis_barang' => 'kursi',
                'deskripsi' => 'Kursi siswa untuk digunakan dalam kegiatan pembelajaran di kelas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'jenis_barang' => 'laptop',
                'deskripsi' => 'Laptop merek ASUS yang digunakan untuk kegiatan pembelajaran dan praktik komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
