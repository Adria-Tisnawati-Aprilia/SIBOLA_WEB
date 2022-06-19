<?php

namespace Database\Seeders;

use App\Models\KategoriLapangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriLapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriLapangan::create([
            "kategori_lapangan" => "Badminton"
        ]);

        KategoriLapangan::create([
            "kategori_lapangan" => "Futsal"
        ]);
    }
}
