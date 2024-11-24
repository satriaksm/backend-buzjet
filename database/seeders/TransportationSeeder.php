<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transportation;

class TransportationSeeder extends Seeder
{
    public function run()
    {
        Transportation::create(['name' => 'Bus', 'type' => 'Land', 'company' => 'Perusahaan A']);
        Transportation::create(['name' => 'Pesawat', 'type' => 'Air', 'company' => 'Perusahaan B']);
        Transportation::create(['name' => 'Kereta', 'type' => 'Rail', 'company' => 'Perusahaan C']);
    }
}

