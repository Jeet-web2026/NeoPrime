<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerVaccancy extends Model
{
    protected $fillable = [
        'designation',
        'salary_range',
        'start_date',
        'requirements',
        'description'
    ];
}
