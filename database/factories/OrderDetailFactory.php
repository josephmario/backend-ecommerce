<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number' => rand(1,2),
            'product_code' => rand(1,2),
            'quantity' => rand(1,2),
            'gross_sale' => 1000,
        ];
    }
}
