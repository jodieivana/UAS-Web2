<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookshelf>
 */
class BookshelfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'progress' => fake()->randomElement(['to read', 'reading', 'read']),
            'book_id' => mt_rand(1,50),
            'user_id' => mt_rand(1,10)
        ];
    }
}
