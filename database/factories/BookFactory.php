<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'authors' => fake()->name(),
            'summary' => fake()->sentence(10,20),
            'book_rating' => mt_rand(1,50) / 10,
            'cover_image' => 'https://source.unsplash.com/random',
            'language' => 'English',
            'tags' => '-',
            'published_date' => fake()->date(),
            'category_id' => mt_rand(1,12)
        ];
    }
}
