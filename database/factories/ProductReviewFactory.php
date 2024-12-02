<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;
    public function definition(): array
    {
        $userId = mt_rand(1, (int)User::max('id'));
        $productId = mt_rand(1, (int)Product::max('id'));
        return [
            'rating' => $this->faker->numberBetween(0, 5),
            'review' => $this->faker->text(),
            'is_approved' => $this->faker->boolean(),
            'is_recommended' => $this->faker->boolean(),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent(),
            'user_id' => $userId,
            'product_id' => $productId
        ];
    }
}
