<?php

namespace App\Http\Controllers\Webpage\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blogs\Blog;

class BlogController extends Controller {

    public function showBlog($url) {
        $blog = Blog::where('url', $url)->first();
        return view('webpage.blogs.blog', compact("blog"));
    }

    public function showBlogs() {
        $blogs = Blog::select()->orderBy("id", "DESC")->paginate(3);
        return view('webpage.blogs.blogs', compact("blogs"));
    }

    public function showBlogsByYear($year) {
        $blogs = Blog::where('year', $year)->orderBy("id", "DESC")->paginate(3);
        return view('webpage.blogs.blogs', compact("blogs"));
    }

}
