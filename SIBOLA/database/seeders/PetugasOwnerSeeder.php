<?php

namespace Database\Seeders;

use App\Models\PetugasOwner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetugasOwner::create([
            "id_owner" => 1,
            "status" => 1
        ]);

        PetugasOwner::create([
            "id_owner" => 1,
            "status" => 2
        ]);
    }
}
