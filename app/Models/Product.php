<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_date',
        'product',
        'mid',
        'high_price',
        'midium_price',
        'low_price',
        'average_price',
        'trading_volume'
    ];
}
