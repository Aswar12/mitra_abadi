<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sale>
 */
class saleFactory extends Factory
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
            'quantity_sold' => $this->faker->randomNumber(),
            'selling_price' => $this->faker->randomFloat(2, 10, 100),
            'sale_date' => $this->faker->date(),

        ];
    }
}
