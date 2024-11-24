<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    public function run()
    {
        Hotel::create(['destination_id' => 1, 'name' => 'Hotel Bali Paradise', 'description' => 'Dekat pantai Kuta']);
        Hotel::create(['destination_id' => 1, 'name' => 'Hotel Ubud Resort', 'description' => 'Tengah hutan']);
        Hotel::create(['destination_id' => 2, 'name' => 'Hotel Malioboro Inn', 'description' => 'Dekat jalan Malioboro']);
        Hotel::create(['destination_id' => 3, 'name' => 'Hotel Senggigi Beach', 'description' => 'Dekat pantai Senggigi']);
    }
}

