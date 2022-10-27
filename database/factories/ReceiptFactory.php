<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // '', '', '', ''
        return [
            'client_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
            'quantity' => $this->faker->numberBetween(5, 200),
            'total_price' => $this->faker->numberBetween(500, 1000)
        ];
    }
}
