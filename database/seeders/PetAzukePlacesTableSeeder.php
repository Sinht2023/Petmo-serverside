<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetAzukePlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the table before seeding
        DB::table('pet_azuke_places')->truncate();

        // Sample data
        $places = [];
        for ($i = 1; $i <= 3; $i++) {
            $places[] = [
                'id' => $i,
                'user_id' => rand(1, 10), // Replace with actual user IDs
                'place_name' => 'Pet Paradise Hotel ' . $i,
                'price' => '¥' . rand(30, 100),
                'postal_code' => '12345',
                'address1' => $i . ' Main St',
                'address2' => 'Suite ' . $i,
                'address3' => 'Anytown, USA',
                'description' => 'Luxurious pet-friendly hotel ' . $i,
                'cat_allow' => rand(0, 1),
                'dog_allow' => rand(0, 1),
                'pet_food_service' => rand(0, 1) ? 'Available' : 'Not available',
                'pets_allowed_number' => rand(1, 5),
                'check_in_time' => rand(1, 12) . ':00 PM',
                'check_out_time' => (rand(1, 12) + 12) . ':00 PM',
                'other_details' => 'Spa, grooming, and more! ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert the data into the table
        DB::table('pet_azuke_places')->insert($places);
    }
}
