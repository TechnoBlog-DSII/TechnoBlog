<?php

namespace Database\Factories;

use App\Models\Category;
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

        $categoryIds = Category::pluck('id')->toArray();
        $usersIds = \App\Models\User::pluck('id')->toArray();

        return [
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'category_id' => $this->faker->randomElement($categoryIds),
            'user_id' => $this->faker->randomElement($usersIds),

        ];
    }
}
