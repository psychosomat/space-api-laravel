<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Planet;

class PlanetApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
	use RefreshDatabase;

	public function test_can_get_all_planets(): void
    {
        Planet::factory()->count(3)->create();
        $response = $this->getJson('/api/planets');
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

	public function test_can_create_a_planet(): void
	{
		$planetData = [
			'name' => 'Kepler-186f',
			'description' => 'First Earth-sized exoplanet in the habitable zone.',
			'size_km' => 14000,
			'solar_system' => 'Kepler-186'
		];

		$response = $this->postJson('/api/planets', $planetData);

		$response->assertStatus(201);
		$response->assertJsonFragment(['name' => 'Kepler-186f']);

		$this->assertDatabaseHas('planets', [
			'name' => 'Kepler-186f'
		]);
	}

	public function test_can_delete_a_planet(): void
	{
		$planet = Planet::factory()->create();

		$response = $this->deleteJson("/api/planets/{$planet->id}");

		$response->assertStatus(204);

		$this->assertDatabaseMissing('planets', [
			'id' => $planet->id
		]);
	}

	public function test_creation_fails_with_invalid_data(): void
	{
		$response = $this->postJson('/api/planets', ['name' => '']);

		$response->assertStatus(422);
		$response->assertJsonValidationErrors('name');
	}

	public function test_returns_404_for_non_existent_planet(): void
	{
		$response = $this->getJson('/api/planets/99999');

		$response->assertStatus(404);
	}
}
