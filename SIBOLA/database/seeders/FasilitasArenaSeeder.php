<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use App\Models\FasilitasArena;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasArenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasArena::create([
            "id_fasilitas" => 1,
            "kode_arena" => "ARN-001"
        ]);

        FasilitasArena::create([
            "id_fasilitas" => 2,
            "kode_arena" => "ARN-001"
        ]);

        FasilitasArena::create([
            "id_fasilitas" => 3,
            "kode_arena" => "ARN-001"
        ]);
    }
}
