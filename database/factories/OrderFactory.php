<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_code' => rand(1,2),
            'order_number' => rand(1,2),
            'status' => 'Created',
        ];
    }
}
