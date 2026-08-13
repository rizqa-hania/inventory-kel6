<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                'password' => '12345',
            ],
            [
                'nama' => 'Melani Widiastuti',
                'username' => 'Melani',
                'email' => 'melani.widiastuti@gmail.com',
                'no_telp' => '089512344321',
                'password' => '12345',
            ],
            [
                'nama' => 'Nakilla Khoirin Periska',
                'username' => 'Nakilla',
                'email' => 'nakilla.khoirin@gmail.com',
                'no_telp' => '089598765432',
                'password' => '12345',
            ],
            [
                'nama' => 'Rizqa Hania Putri Arahman',
                'username' => 'Rizqa',
                'email' => 'rizqa.hania@gmail.com',
                'no_telp' => '089523456789',
                'password' => '12345',
            ],
            [
                'nama' => 'Zaida Thalitha Atiqah',
                'username' => 'Zaida',
                'email' => 'zaida.thalita@gmail.com',
                'no_telp' => '089511112222',
                'password' => '12345',
            ],
        ]);
    }
}
