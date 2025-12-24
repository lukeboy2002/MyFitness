<?php

namespace Database\Factories;

use App\Enums\Mode;
use App\Models\Stairmaster;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Stairmaster>
 */
class StairmasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date(),
            'time' => $this->faker->numberBetween(10, 60),
            'weight' => $this->faker->numberBetween(60, 120),
            'mode' => $this->faker->randomElement(Mode::cases()),
            'intensity' => $this->faker->numberBetween(1, 20),
            'watts' => $this->faker->numberBetween(50, 300),
            'mets' => $this->faker->numberBetween(5, 15),
            'ttl' => $this->faker->numberBetween(100, 1000),
            'act' => $this->faker->numberBetween(50, 500),
            'stairs' => $this->faker->numberBetween(10, 60),
            'watch_stairs' => $this->faker->numberBetween(10, 60),
            'watch_steps' => $this->faker->numberBetween(10, 500),
            'watch_rest_energy' => $this->faker->numberBetween(50, 500),
            'watch_heart_rate' => $this->faker->numberBetween(50, 500),
            'watch_active_energy' => $this->faker->numberBetween(50, 500),
            'watch_met_values' => $this->faker->numberBetween(5, 15),
            'watch_rise_height' => $this->faker->numberBetween(1, 250),
        ];
    }
}
