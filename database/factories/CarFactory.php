<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'make' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'vin' => $this->faker->unique()->word,
            'shipping_status' => $this->faker->word, // Adjust if necessary
        ];
    }
}
