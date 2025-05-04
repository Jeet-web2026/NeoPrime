<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminVerify extends Model
{
    public $timestamps = false;
    protected $table = 'admin_verify';
    protected $fillable = [
        'admin_email',
        'admin_password',
    ];
}
