<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->sentence(3,6),
            'content' => fake()->sentence(10,20),
            'sent_date' => fake()->date(),
            'user_id' => mt_rand(1,10),
            'report_id' => mt_rand(1,10)
        ];
    }
}
