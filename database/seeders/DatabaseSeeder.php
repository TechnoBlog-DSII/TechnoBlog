<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Sergio Escudero Tabares',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('Set12345678?'),
        ]);

        \App\Models\Category::factory(10)->create();

        \App\Models\Tag::factory(10)->create();

        \App\Models\Forum::factory(10)->create();
    }
}
