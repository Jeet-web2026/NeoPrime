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

    public function services()
    {
        return $this->hasOne(OurServices::class, 'id', 'services_id');
    }
}
