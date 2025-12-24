<?php

namespace Database\Factories;

use App\Enums\Mode;
use App\Models\Cycling;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cycling>
 */
class CyclingFactory extends Factory
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
            'distance' => $this->faker->numberBetween(500, 5000),
            'watts' => $this->faker->numberBetween(50, 300),
            'mets' => $this->faker->numberBetween(5, 15),
            'ttl' => $this->faker->numberBetween(100, 1000),
            'act' => $this->faker->numberBetween(50, 500),
            'watch_cadence' => $this->faker->numberBetween(50, 500),
            'watch_rest_energy' => $this->faker->numberBetween(50, 500),
            'watch_heart_rate' => $this->faker->numberBetween(50, 500),
            'watch_cycling_power' => $this->faker->numberBetween(1, 20),
            'watch_cycling_speed' => $this->faker->numberBetween(10, 40),
            'watch_cycling_distance' => $this->faker->numberBetween(500, 5000),
            'watch_active_energy' => $this->faker->numberBetween(50, 500),
            'watch_met_values' => $this->faker->numberBetween(5, 15),
        ];
    }
}
