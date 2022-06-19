<?php

namespace Database\Seeders;

use App\Models\Lapangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lapangan::create([
            "kode_lapangan" => "LPN-001",
            "kode_arena" => "ARN-001",
            "nama_lapangan" => "Lapangan 1",
            "id_jenis_lapangan" => 1,
            "harga" => 50000,
            "status" => 1,
            "id_kategori_lapangan" => 1
        ]);

        Lapangan::create([
            "kode_lapangan" => "LPN-002",
            "kode_arena" => "ARN-001",
            "nama_lapangan" => "Lapangan 2",
            "id_jenis_lapangan" => 2,
            "harga" => 70000,
            "status" => 1,
            "id_kategori_lapangan" => 1
        ]);
    }
}
