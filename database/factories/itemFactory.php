<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\item>
 */
class itemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'unit_price' => $this->faker->randomFloat(2, 1, 100),
            'demand_rate' => $this->faker->randomNumber(),
            'ordering_cost' => $this->faker->randomFloat(2, 1, 10),
            'holding_cost' => $this->faker->randomFloat(2, 0.1, 2),
        ];
    }
}
