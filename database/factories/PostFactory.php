<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
Use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'excerpt' => '<p>' . implode('</p><p>', fake()->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(6)) . '</p>',
            'published_at' => fake()->dateTime(),
        ];
    }
}
