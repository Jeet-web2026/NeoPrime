<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Latestvideos extends Model
{
    public $table = "latestvideos";
    protected $fillable = [
        'video_link',
        'video_image',
        'video_content'
    ];
}
