<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'category_id' => \App\Models\Category::factory(),
            'user_id' => \App\Models\User::factory(),

        ];
    }
}
