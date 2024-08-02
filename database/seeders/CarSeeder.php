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
        $manufacturers = [
            'Ford', 'Chevrolet', 'Tesla', 'Chrysler',
            'Volkswagen', 'BMW', 'Mercedes-Benz', 'Audi',
            'Toyota', 'Honda', 'Nissan', 'Subaru',
            'Hyundai', 'Kia',
            'Geely', 'BYD', 'SAIC Motor'
        ];

        foreach (range(1, 50) as $index) {
            // Generate a unique image name for the main image and store it
            $mainImageName = 'car_' . $index . '.jpg';
            $mainImagePath = $this->getPlaceholderImage();
            $mainImageContent = file_get_contents($mainImagePath);
            Storage::disk('public')->put('images/' . $mainImageName, $mainImageContent);

            // Create a new car record
            $car = Car::create([
                'make' => $faker->randomElement($manufacturers),
                'model' => $faker->word,
                'year' => $faker->year,
                'vin' => $this->generateVin(),
                'shipping_status' => $faker->randomElement($statuses),
                'image' => 'images/' . $mainImageName,
                'fuel_type' => $faker->randomElement(['Gasoline', 'Diesel', 'Electric', 'Hybrid']),
                'engine' => $faker->word . ' ' . $faker->randomNumber(1, true) . ' L',
                'location' => $faker->city . ', ' . $faker->country,
                'mileage' => $faker->randomNumber(4) . ' mi',
                'price' => $faker->randomFloat(2, 5000, 50000),
                'stock' => $faker->numberBetween(1, 10),
                'used' => $faker->randomElement(['1 Year Used', '2 Years Used', '3 Years Used', '4 Years Used', '5 Years Used']),
            ]);

            // Add at least 3 additional images for the car
            foreach (range(1, 3) as $imageIndex) {
                $imageName = 'car_' . $index . '_image_' . $imageIndex . '.jpg';
                $imagePath = $this->getPlaceholderImage();
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

    /**
     * Get a placeholder image path.
     *
     * @return string
     */
    private function getPlaceholderImage()
    {
        // Return a local placeholder image URL
        // Make sure you have this placeholder image in the public folder or another accessible location
        return 'https://via.placeholder.com/640x480.png?text=Placeholder+Image';
    }
}
