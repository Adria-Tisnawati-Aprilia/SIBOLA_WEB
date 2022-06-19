<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fasilitas::create([
            "fasilitas" => "Kamar Mandi",
            "status" => "1"
        ]);

        Fasilitas::create([
            "fasilitas" => "Toilet",
            "status" => "1"
        ]);

        Fasilitas::create([
            "fasilitas" => "Bangku",
            "status" => "1"
        ]);

        Fasilitas::create([
            "fasilitas" => "Mushola",
            "status" => "1"
        ]);
    }
}
