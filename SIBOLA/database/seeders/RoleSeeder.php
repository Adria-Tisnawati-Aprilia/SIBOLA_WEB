<?php

namespace Database\Seeders;

use App\Models\HakAkses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HakAkses::create([
            "nama"=>"Admin"
        ]);

        HakAkses::create([
            "nama"=>"User"
        ]);
    }
}
