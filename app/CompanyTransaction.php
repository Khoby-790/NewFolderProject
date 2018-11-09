<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyTransaction extends Model
{
    protected $fillable = [
      'company_id',
      'quantity',
      'price',
      'item'
    ];
}
