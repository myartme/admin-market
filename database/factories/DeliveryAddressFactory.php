<?php

namespace Database\Factories;

use App\Models\DeliveryAddress;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryAddressFactory extends Factory
{
    protected $model = DeliveryAddress::class;
    public function definition(): array
    {
        $orderId = mt_rand(1, (int)Order::max('id'));
        return [
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'house_number' => $this->faker->streetAddress(),
            'zip_code' => $this->faker->postcode(),
            'additional_info' => $this->faker->text(),
            'order_id' => $orderId,
        ];
    }
}
