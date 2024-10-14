<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => Author::factory(),
            'title' => $this->faker->sentence,
            'published_date' => now()->subYears(rand(1, 2))->subDays(rand(1, 365)),
            'pages' => $this->faker->numberBetween(100, 1000),
            'description' => $this->faker->paragraph,
        ];
    }
}
