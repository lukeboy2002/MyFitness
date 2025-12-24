<?php

namespace Database\Factories;

use App\Models\Rowing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Rowing>
 */
class RowingFactory extends Factory
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
            'distance' => $this->faker->numberBetween(500, 5000),
            'stroke_rate' => $this->faker->numberBetween(50, 300),
            'pace' => $this->faker->numberBetween(5, 15),
            'watts' => $this->faker->numberBetween(100, 1000),
            'watch_rest_energy' => $this->faker->numberBetween(50, 500),
            'watch_heart_rate' => $this->faker->numberBetween(50, 500),
            'watch_active_energy' => $this->faker->numberBetween(50, 500),
            'watch_met_values' => $this->faker->numberBetween(5, 15),
        ];
    }
}
