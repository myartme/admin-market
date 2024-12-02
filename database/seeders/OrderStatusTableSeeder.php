<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'pending', 'ru' => 'Ожидает обработки'],
            ['name' => 'processing', 'ru' => 'В обработке'],
            ['name' => 'shipped', 'ru' => 'Отправлен'],
            ['name' => 'delivered', 'ru' => 'Доставлен'],
            ['name' => 'cancelled', 'ru' => 'Отменен'],
            ['name' => 'awaiting_payment', 'ru' => 'Ожидает оплаты'],
            ['name' => 'payment_received', 'ru' => 'Оплачен'],
            ['name' => 'payment_failed', 'ru' => 'Оплата не была произведена'],
            ['name' => 'refunded', 'ru' => 'Возврат'],
            ['name' => 'preparing', 'ru' => 'Готовится к отправке'],
        ];

        foreach ($statuses as $statusData) {
            OrderStatus::create($statusData);
        }
    }
}
