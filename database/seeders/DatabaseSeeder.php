<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Position;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $tags = Tag::factory()->count(8)->create();
        Employer::factory()
            ->count(5)
            ->has(
                \Database\Factories\PositionFactory::new()->count(5)
                    ->afterCreating(function ($position) use ($tags) {
                        $position->tags()->attach($tags->random(rand(2, 4)));
                    })
            )
            ->create();
    }
}
