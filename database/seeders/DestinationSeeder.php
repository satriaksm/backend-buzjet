<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run()
    {
        Destination::create(['name' => 'Bali', 'description' => 'Pulau Dewata', 'image' => 'bali.jpg']);
        Destination::create(['name' => 'Yogyakarta', 'description' => 'Kota Budaya', 'image' => 'yogyakarta.jpg']);
        Destination::create(['name' => 'Lombok', 'description' => 'Pulau Seribu Masjid', 'image' => 'lombok.jpg']);
    }
}

