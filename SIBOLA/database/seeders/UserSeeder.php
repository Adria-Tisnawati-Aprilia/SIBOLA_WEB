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
            "nama"=>"Admin",
            "email"=>"admin@gmail.com",
            "password"=> bcrypt("Password"),
            "id_hak_akses"=>1
        ]);

        User::create([
            "nama"=>"User",
            "email"=>"user@gmail.com",
            "password"=> bcrypt("Password"),
            "id_hak_akses"=>2
        ]);
    }
}
