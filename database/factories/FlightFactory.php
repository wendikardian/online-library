<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deps' => $this->faker->dateTimeBetween('now', '24 hours'),
            'passengers' => $this->faker->numberBetween(75, 150),
            'created_at' => $this->faker->dateTimeBetween('now', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('now', 'now'),
            // add for column ammount double (8, 2)
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            // add for column name char(100)
            'name' => $this->faker->name(),
            // add for confirmed tinyint(1)
            'confirmed' => $this->faker->boolean(),
        ];
    }
}
