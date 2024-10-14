<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'bio' => $this->faker->paragraph,
            'enrollment_date' => now()->subYears(rand(1, 2))->subDays(rand(1, 365)),
        ];
    }
}
