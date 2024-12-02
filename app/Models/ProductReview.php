<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    /** @use HasFactory<\Database\Factories\ProductReviewFactory> */
    use HasFactory;

    protected $table = 'product_reviews';

    protected $fillable = [
        'rating',
        'review',
        'is_approved',
        'is_recommended',
        'ip_address',
        'user_agent',
        'user_id',
        'product_id'
    ];
}
