<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run()
    {
        Package::create(['name' => 'Liburan Bali', 'price' => 1500000, 'transportation_id' => 1]);
        Package::create(['name' => 'Eksplor Jogja', 'price' => 1000000, 'transportation_id' => 3]);
        Package::create(['name' => 'Wisata Lombok', 'price' => 2000000, 'transportation_id' => 2]);
    }
}

