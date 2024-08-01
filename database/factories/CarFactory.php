<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        $statuses = ['available', 'sold', 'in transit', 'pending'];

        return [
            'make' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year($max = 'now'), // Generates a realistic year
            'vin' => $this->generateVin(), // Use a realistic VIN
            'shipping_status' => $this->faker->randomElement($statuses), // Randomly pick from predefined statuses
            'image' => $this->faker->imageUrl(640, 480, 'cars', true, 'Faker'), // Generate a placeholder image URL
        ];
    }

    /**
     * Generate a realistic VIN.
     *
     * @return string
     */
    private function generateVin()
    {
        $lettersAndNumbers = 'ABCDEFGHJKLMNPRSTUVWXYZ0123456789';
        $vin = '';

        for ($i = 0; $i < 17; $i++) {
            $vin .= $lettersAndNumbers[random_int(0, strlen($lettersAndNumbers) - 1)];
        }

        return $vin;
    }
}
