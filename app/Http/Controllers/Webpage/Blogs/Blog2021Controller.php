<?php

namespace App\Http\Controllers\Webpage\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blogs\Blog;

class Blog2021Controller extends Controller {

    public function __construct() {
        
    }

    public function showBlogs2021() {
        return view('webpage.blogs.2021.2021');
    }
    
    public function showBlog001() {
        $blog= Blog::findOrFail(1);
        return view('webpage.blogs.2021._15_08_2021',compact("blog"));
    }
    public function showBlog002() {
        return view('webpage.blogs.2021._20_09_2021');
    }
    public function showBlog003() {
        return view('webpage.blogs.2021._05_11_2021');
    }
    
}
