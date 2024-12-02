<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            OrderStatusTableSeeder::class,
            ProductStatusTableSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory(10)->create();
        Category::factory(90)->create();

        Product::factory(100)->create();
        Order::factory(100)->create();
        OrderItem::factory(100)->create();
        DeliveryAddress::factory(100)->create();
        Payment::factory(100)->create();
        ProductReview::factory(100)->create();

        User::factory(99)->create();
    }
}
