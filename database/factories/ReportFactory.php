<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
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
            'content' => fake()->sentence(10,20),
            'report_type' => fake()->randomElement(['offensive', 'spam']),
            'report_status' => fake()->randomElement(['approved', 'declined', 'on progress']),
            'date_reported' => fake()->date(),
            'date_resolved' => fake()->date(),
            'reported_user_id' => mt_rand(1,10),
            'reporter_user_id' => mt_rand(1,10),
            'reported_review_id' => mt_rand(1,15),
        ];
    }
}
