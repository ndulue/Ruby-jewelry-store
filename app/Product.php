<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'image',
        'price',
        'sku',
        'title',
        'description',
        'label',
        'views',
        'manufacturer'
    ];
}
