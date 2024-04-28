<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating' => mt_rand(1, 5),
            'review_text' => fake()->sentence(5,15),
            'review_date' => fake()->date(),
            'book_id' => mt_rand(1,50),
            'user_id' => mt_rand(1,10),
            'review_status' => fake()->randomElement(['review', 'write a review']),
        ];
    }
}
