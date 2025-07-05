<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientRegister extends Authenticatable
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
