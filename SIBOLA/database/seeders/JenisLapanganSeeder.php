<?php

namespace Database\Seeders;

use App\Models\JenisLapangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisLapangan::create([
            "jenis_lapangan" => "Rumput"
        ]);

        JenisLapangan::create([
            "jenis_lapangan" => "Plester"
        ]);
    }
}
