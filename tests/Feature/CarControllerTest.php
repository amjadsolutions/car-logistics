<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tests\TestCase;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_cars()
    {
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        Car::factory()->count(5)->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('/api/cars');

        $response->assertStatus(200);
        $this->assertCount(5, $response->json('data'));
    }

    /** @test */
    public function it_can_add_a_car()
    {
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('/api/cars', [
            'make' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2023,
            'status' => 'available',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('cars', ['make' => 'Toyota']);
    }

    /** @test */
    public function it_can_update_car_status()
    {
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        $car = Car::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->patch("/api/cars/{$car->id}", [
            'status' => 'in_transit',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('cars', ['id' => $car->id, 'status' => 'in_transit']);
    }

    /** @test */
    public function it_can_delete_a_car()
    {
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        $car = Car::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->delete("/api/cars/{$car->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('cars', ['id' => $car->id]);
    }
}
