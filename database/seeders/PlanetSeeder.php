<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Planet::create([
            'name' => 'Earth',
            'description' => 'Blue planet with diverse life',
            'size_km' => 12742,
            'solar_system' => 'Solar System',
            'image_url' => 'https://example.com/earth.jpg',
            'is_habitable' => true
        ]);

        Planet::create([
            'name' => 'Mars',
            'description' => 'Red planet, a target for future colonization',
            'size_km' => 6779,
            'solar_system' => 'Solar System',
            'is_habitable' => false
        ]);
    }
}
