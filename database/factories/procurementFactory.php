<?php

namespace Database\Factories;

use App\Models\item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\procurement>
 */
class procurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => function () {
                return Item::factory()->create()->id;
            },
            'order_quantity' => $this->faker->randomNumber(),
            'total_cost' => $this->faker->randomFloat(2, 50, 500),
            'procurement_date' => $this->faker->date(),
        ];
    }
}
