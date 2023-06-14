<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->text(450),
            'content' => $this->faker->paragraph(4, true),
            'category_id' => $this->faker->randomElement($categoryIds),
            'user_id' => $this->faker->randomElement($usersIds),
        ];
    }
}
