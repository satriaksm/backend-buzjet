<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DestinationSeeder::class,
            HotelSeeder::class,
            TransportationSeeder::class,
            PackageSeeder::class,

        ]);
    }
}

