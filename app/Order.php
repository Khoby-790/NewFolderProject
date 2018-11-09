<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'flower_id',
      'company_id',
      'delivery_location',
      'receiver_contact'
    ];
}
