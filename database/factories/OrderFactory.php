<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'customer_id' => 1,
            'product' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'total' => $this->faker->numberBetween(1, 100),
        ];
    }
}
