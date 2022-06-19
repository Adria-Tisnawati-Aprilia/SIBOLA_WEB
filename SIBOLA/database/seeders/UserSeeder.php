<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("Password"),
            "no_hp" => 12345,
            "id_hak_akses" => 1,
            "alamat" => "Bandung"
        ]);

        User::create([
            "nama" => "Owner",
            "email" => "owner@gmail.com",
            "password" => bcrypt("Password"),
            "no_hp" => 54321,
            "id_hak_akses" => 2,
            "alamat" => "Cirebon"
        ]);

        User::create([
            "nama" => "User",
            "email" => "user@gmail.com",
            "password" => bcrypt("Password"),
            "no_hp" => 5555,
            "id_hak_akses" => 3,
            "alamat" => "Singaraja"
        ]);
    }
}
