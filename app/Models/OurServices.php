<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    protected $fillable = [
        'icon',
        'name',
        'image',
        'description'
    ];
}
