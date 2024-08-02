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
        $fuelTypes = ['Gasoline', 'Diesel', 'Electric', 'Hybrid'];
        $countries = ['UAE', 'Pakistan', 'USA', 'UK', 'Germany', 'France', 'Australia']; // Example countries
        $cities = ['Dubai', 'Islamabad', 'New York', 'London', 'Berlin', 'Paris', 'Sydney']; // Example cities

        return [
            'make' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year($max = 'now'), // Generates a realistic year
            'vin' => $this->generateVin(), // Use a realistic VIN
            'shipping_status' => $this->faker->randomElement($statuses), // Randomly pick from predefined statuses
            'image' => $this->faker->imageUrl(640, 480, 'cars', true, 'Faker'), // Generate a placeholder image URL
            'fuel_type' => $this->faker->randomElement($fuelTypes), // Randomly pick from predefined fuel types
            'engine' => $this->faker->word . ' ' . $this->faker->randomNumber(1, true) . ' L', // e.g., '2.0 L'
            'location' => $this->faker->word . ', ' . $this->faker->randomElement($cities) . ', ' . $this->faker->randomElement($countries), // e.g., 'I-8 Markaz, Islamabad, Pakistan'
            'mileage' => $this->faker->numberBetween(1000, 50000) . ' mi', // e.g., '1500 mi'
            'price' => $this->faker->randomFloat(2, 1000, 50000), // Price between 1000 and 50000
            'stock' => $this->faker->numberBetween(1, 10), // Stock quantity between 1 and 10
            'used' => $this->faker->numberBetween(1, 5) . ' Years used', // e.g., '2 Years used'
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
