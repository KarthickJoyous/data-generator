<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'bio' => $this->faker->paragraph,
            'dob' => now()->subYears(rand(20, 60))->format('Y-m-d'),
            'picture' => $this->faker->imageUrl(200, 200, 'people'),
            'cover' => $this->faker->imageUrl(800, 200, 'nature'),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'postcode' => $this->faker->postcode,
            'street_address' => $this->faker->streetAddress,
        ];
    }
}
