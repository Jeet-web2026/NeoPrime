<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallbackRequest extends Model
{
    public $table = 'callback_requests';
    protected $fillable = [
        'name',
        'email',
        'project_type',
    ];
}
