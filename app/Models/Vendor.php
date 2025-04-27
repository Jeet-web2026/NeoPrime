<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'vendors';

    protected $fillable = [
        'product_image',
        'product_name',
        'product_price',
        'product_discount',
        'product_company_name',
        'product_available',
        'product_description',
    ];
}
