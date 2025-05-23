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

    public function ViewBlogs()
    {
        $blogs = Blogs::orderBy('id', 'desc')->get();
        $blogs->map(function ($blog) {
            $words = explode(' ', strip_tags($blog->blog_description));
            $blog->short_description = implode(' ', array_slice($words, 0, 25));
            return $blog;
        });
        return view('blog.all-blogs', compact('blogs'));
    }
}
