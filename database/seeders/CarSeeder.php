<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $statuses = ['available', 'sold', 'in transit', 'pending'];

        foreach (range(1, 50) as $index) {
            DB::table('cars')->insert([
                'make' => $faker->company,
                'model' => $faker->word,
                'year' => $faker->year,
                'vin' => $this->generateVin(),
                'shipping_status' => $faker->randomElement($statuses),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
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
