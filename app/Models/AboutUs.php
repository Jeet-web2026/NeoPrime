<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AboutUs extends Model
{
    public $table = "aboutus";
    protected $fillable = [
        'about_heading',
        'about_description',
        'about_first_point',
        'about_second_point',
        'about_third_point'
    ];
}
