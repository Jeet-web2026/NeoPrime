<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPlace extends Model
{
    protected $fillable = [
        'client_id',
        'product_id',
    ];
}
