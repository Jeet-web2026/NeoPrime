<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function ViewBlog($id)
    {
        $blogDetails = Blogs::find($id);
        return view('blog.full-blog-view', compact('blogDetails'));
    }
}
