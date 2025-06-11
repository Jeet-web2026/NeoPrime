<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDescription extends Model
{
    protected $fillable = [
        'services_id',
        'services_description'
    ];
}
