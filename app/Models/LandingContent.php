<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingContent extends Model
{
    protected $table = 'landing_contents';
    public $timestamps = false;
    protected $fillable = [
        'main_heading',
        'meta_content',
        'meta_description'
    ];
}
