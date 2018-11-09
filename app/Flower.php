<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = [
        'flower_name',
        'flower_type',
        'flower_price',
        'flower_description',
        'stock'
    ];
}
