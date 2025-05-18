<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingWhatWeoffer extends Model
{
    public $table = "what_we_offers";
    protected $fillable = [
        'service_name',
        'service_img_url'
    ];
}
