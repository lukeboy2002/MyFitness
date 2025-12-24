<?php

namespace Database\Seeders;

use App\Models\Crosstrainer;
use App\Models\Cycling;
use App\Models\Rowing;
use App\Models\Stairmaster;
use App\Models\User;
use App\Models\Walking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'antoine@example.com'],
            ['name' => 'Antoine', 'password' => bcrypt('password')]
        );

        $user->crosstrainers()->createMany(
            Crosstrainer::factory(3)->make()->toArray()
        );

        $user->cyclings()->createMany(
            Cycling::factory(3)->make()->toArray()
        );

        $user->rowings()->createMany(
            Rowing::factory(3)->make()->toArray()
        );

        $user->stairmasters()->createMany(
            Stairmaster::factory(3)->make()->toArray()
        );

        $user->walkings()->createMany(
            Walking::factory(3)->make()->toArray()
        );
    }
}
