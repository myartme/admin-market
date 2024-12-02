<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryAddressFactory> */
    use HasFactory;

    protected $fillable = [
        'country',
        'city',
        'street',
        'house_number',
        'zip_code',
        'additional_info',
        'order_id',
    ];
}
