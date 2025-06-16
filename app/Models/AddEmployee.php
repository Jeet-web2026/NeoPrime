<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddEmployee extends Model
{
    protected $fillable = [
        'position',
        'start_date',
        'designation',
        'name',
        'contact_no',
        'email',
        'age',
        'country',
        'city',
        'prevoius_joining_date',
        'prevoius_employeer',
        'last_withdran_salary',
        'prevoius_designation',
        'prevoius_location',
        'total_years_of_working'
    ];
}
