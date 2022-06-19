<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(FasilitasSeeder::class);
        $this->call(KategoriLapanganSeeder::class);
        $this->call(JenisLapanganSeeder::class);
        $this->call(PetugasOwnerSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(LapanganSeeder::class);
        $this->call(FasilitasArenaSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(ArenaSeeder::class);
    }
}
