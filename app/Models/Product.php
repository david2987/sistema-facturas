<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'purchase_price',
        'sale_price',
        'tax'
    ];

}
