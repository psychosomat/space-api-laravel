<?php

namespace Database\Factories;

use App\Models\Planet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planet>
 */
class PlanetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Planet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'size_km' => fake()->numberBetween(1000, 100000),
            'solar_system' => fake()->word(),
            'image_url' => fake()->imageUrl(),
        ];
    }
}
