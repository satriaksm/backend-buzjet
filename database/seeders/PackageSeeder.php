<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run()
    {
        // Membuat paket
        $package1 = Package::create(['name' => 'Liburan Bali & Jogja', 'price' => 2500000, 'transportation_id' => 1]);
        $package2 = Package::create(['name' => 'Wisata Lombok', 'price' => 2000000, 'transportation_id' => 2]);
        $package3 = Package::create(['name' => 'Liburan 3 Destinasi', 'price' => 3000000, 'transportation_id' => 3]);

        // Menambahkan destinasi ke paket
        $package1->destinations()->attach([1, 2]); // Paket 1 (Bali & Jogja)
        $package2->destinations()->attach([3]);    // Paket 2 (Lombok)
        $package3->destinations()->attach([1, 2, 3]); // Paket 3 (Bali, Jogja, Lombok)
    }
}

