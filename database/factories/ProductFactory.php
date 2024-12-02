<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        $productStatusId = mt_rand(1, (int)ProductStatus::max('id'));
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'sku' => $this->faker->countryCode().$this->faker->postcode(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'status_id' => $productStatusId,
        ];
    }
}
