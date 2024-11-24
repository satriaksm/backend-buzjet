<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageDestinationSeeder extends Seeder
{
    public function run()
    {
        DB::table('package_destinations')->insert([
            ['package_id' => 1, 'destination_id' => 1], // Bali untuk Paket Liburan Bali
            ['package_id' => 2, 'destination_id' => 2], // Yogyakarta untuk Eksplor Jogja
            ['package_id' => 3, 'destination_id' => 3], // Lombok untuk Wisata Lombok
            ['package_id' => 1, 'destination_id' => 2], // Jogja untuk Paket Liburan Bali
        ]);
    }
}

