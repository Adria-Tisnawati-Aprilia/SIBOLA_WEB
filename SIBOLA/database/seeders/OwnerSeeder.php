<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            "id_users" => 2,
            "tanggal_bergabung" => "2020-01-01",
            "status" => "1",
            "alamat_owner" => "Bandung"
        ]);
    }
}
