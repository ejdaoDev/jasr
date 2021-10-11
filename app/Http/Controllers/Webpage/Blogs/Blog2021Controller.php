<?php

namespace App\Http\Controllers\Webpage\Blogs;

use App\Http\Controllers\Controller;

class Blog2021Controller extends Controller {

    public function __construct() {
        
    }

    public function showBlogs2021() {
        return view('webpage.blogs.2021.2021');
    }
    
    public function showBlog001() {
        return view('webpage.blogs.2021._15_08_2021');
    }
    public function showBlog002() {
        return view('webpage.blogs.2021._20_09_2021');
    }
    
}
