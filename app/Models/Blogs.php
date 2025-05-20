<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public $table = "blogs";
    protected $fillable = [
        'blog_tittle',
        'blog_description',
        'blog_image'
    ];
}
