<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDescription extends Model
{
    protected $table = "servicedescription";
    protected $fillable = [
        'services_id',
        'services_description'
    ];
}
