<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;
    public function definition(): array
    {
        $orderId = mt_rand(1, (int)Order::max('id'));
        $productId = mt_rand(1, (int)Product::max('id'));
        return [
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'order_id' => $orderId,
            'product_id' => $productId,
        ];
    }
}
