<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Maulina Sheva',
                'username' => 'Lina',
                'email' => 'maulina.sheva@gmail.com',
                'no_telp' => '089512345678',
                'password' => Hash::make('12345'),
            ],
            [
                'nama' => 'Melani Widiastuti',
                'username' => 'Melani',
                'email' => 'melani.widiastuti@gmail.com',
                'no_telp' => '089512344321',
                'password' => Hash::make('12345'),
            ],
            [
                'nama' => 'Nakilla Khoirin Periska',
                'username' => 'Nakilla',
                'email' => 'nakilla.khoirin@gmail.com',
                'no_telp' => '089598765432',
                'password' => Hash::make('12345'),
            ],
            [
                'nama' => 'Rizqa Hania Putri Arahman',
                'username' => 'Rizqa',
                'email' => 'rizqa.hania@gmail.com',
                'no_telp' => '089523456789',
                'password' => Hash::make('12345'),
            ],
            [
                'nama' => 'Zaida Thalitha Atiqah',
                'username' => 'Zaida',
                'email' => 'zaida.thalita@gmail.com',
                'no_telp' => '089511112222',
                'password' => Hash::make('12345'),
            ],
        ]);

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
