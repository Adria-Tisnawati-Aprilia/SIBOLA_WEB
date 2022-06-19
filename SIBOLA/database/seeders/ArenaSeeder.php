<?php

namespace Database\Seeders;

use App\Models\Arena;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arena::create([
            "kode_arena" => "ARN-001",
            "nama_arena" => "Vianos",
            "id_owner" => 1,
            "no_hp" => 555,
            "alamat" => "Bandung",
            "deskripsi" => "Lapangan Vianos"
        ]);

        Arena::create([
            "kode_arena" => "ARN-002",
            "nama_arena" => "GO-Sport",
            "id_owner" => 1,
            "no_hp" => 555,
            "alamat" => "Cirebon",
            "deskripsi" => "Lapangan GO - Sport"
        ]);
    }
}
