<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3,10),
            'content' => fake()->paragraphs(mt_rand(3,7), true),
            'visibility' => mt_rand(0,1),
            'status' => fake()->randomElement(['published', 'unpublished']),
            'tags' => '-',
            'publication_date' => fake()->date(),
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,12)  
        ];
    }
}
