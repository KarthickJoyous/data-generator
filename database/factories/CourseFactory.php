<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'published_date' => now()->subYears(rand(1, 2))->subDays(rand(1, 365)),
            'description' => $this->faker->paragraph,
        ];
    }
}
