<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientRegister extends Model
{
    protected $fillable = [
        'email',
        'name',
        'address',
        'address_second',
        'country',
        'state',
        'city',
        'pincode',
        'password'
    ];
}
