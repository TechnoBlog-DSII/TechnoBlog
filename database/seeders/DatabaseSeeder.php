<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);
        
        \App\Models\Tag::factory(10)->create();

        \App\Models\Forum::factory(20)->create();
    }
}
