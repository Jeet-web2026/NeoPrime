<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class VendorLogin extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'vendor_logins';

    protected $fillable = [
        'vendor_login_id',
        'password'
    ];

    protected $hidden = [
        'password',
    ];
}
