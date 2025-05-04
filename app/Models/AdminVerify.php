<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminVerify extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'admin_verifies';
    protected $fillable = [
        'admin_email',
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
