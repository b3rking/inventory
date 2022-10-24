<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'category_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'purchase_price' => $this->faker->numberBetween(100, 500),
            'sell_price' => $this->faker->numberBetween(600, 1000)
        ];
    }
}
