<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;
    public function definition(): array
    {
        $userId = mt_rand(1, (int)User::max('id'));
        $orderStatusId = mt_rand(1, (int)OrderStatus::max('id'));
        return [
            'total_price' => $this->faker->numberBetween(10000, 100000),
            'user_id' => $userId,
            'status_id' => $orderStatusId,
        ];
    }
}
