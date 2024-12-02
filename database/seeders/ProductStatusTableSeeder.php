<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Seeder;

class ProductStatusTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'active', 'ru' => 'В наличии'],
            ['name' => 'out_of_stock', 'ru' => 'Нет в наличии'],
            ['name' => 'draft', 'ru' => 'Черновик'],
            ['name' => 'pending_approval', 'ru' => 'Ожидает проверки']
        ];

        foreach ($statuses as $statusData) {
            ProductStatus::create($statusData);
        }
    }
}
