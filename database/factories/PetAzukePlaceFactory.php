<?php

namespace Database\Factories;

use App\Models\PetAzukePlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetAzukePlaceFactory extends Factory
{
    protected $model = PetAzukePlace::class;

    public function definition()
    {
        return [
            'user_id' => 1,
            'place_name' => $this->faker->word,
            'price' => $this->faker->numberBetween(10, 100),
            'postal_code' => $this->faker->postcode,
            'address1' => $this->faker->address,
            'address2' => $this->faker->secondaryAddress,
            'address3' => $this->faker->optional()->address,
            'description' => $this->faker->sentence,
            'cat_allow' => $this->faker->boolean,
            'dog_allow' => $this->faker->boolean,
            'pet_food_service' => $this->faker->boolean,
            'pets_allowed_number' => $this->faker->numberBetween(1, 5),
            'check_in_time' => $this->faker->time,
            'check_out_time' => $this->faker->time,
            'other_details' => $this->faker->optional()->paragraph,
        ];
    }
}
