<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $statuses = ['available', 'sold', 'in transit', 'pending'];

        foreach (range(1, 50) as $index) {
            // Generate a unique image name for the main image and store it
            $mainImageName = 'car_' . $index . '.jpg';
            $mainImagePath = $faker->imageUrl(640, 480, 'cars', true, 'Faker');
            $mainImageContent = file_get_contents($mainImagePath);
            Storage::disk('public')->put('images/' . $mainImageName, $mainImageContent);

            // Create a new car record
            $car = Car::create([
                'make' => $faker->word,
                'model' => $faker->word,
                'year' => $faker->year,
                'vin' => $this->generateVin(),
                'shipping_status' => $faker->randomElement($statuses),
                'image' => 'images/' . $mainImageName, // Main image path
            ]);

            // Add at least 3 additional images for the car
            foreach (range(1, 3) as $imageIndex) {
                $imageName = 'car_' . $index . '_image_' . $imageIndex . '.jpg';
                $imagePath = $faker->imageUrl(640, 480, 'cars', true, 'Faker');
                $imageContent = file_get_contents($imagePath);
                Storage::disk('public')->put('car_images/' . $imageName, $imageContent);

                // Save image path to car_images table
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => 'car_images/' . $imageName,
                ]);
            }
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
