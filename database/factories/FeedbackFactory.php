<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3,6),
            'content' => fake()->sentence(5,15),
            'type' => '-',
            'status' => fake()->randomElement(['approved', 'declined', 'on progress']),
            'date_submitted' => fake()->date(),
            'date_resolved' => fake()->date(),
            'user_id' => mt_rand(1,10),
        ];
    }
}
