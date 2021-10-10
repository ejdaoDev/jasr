<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class BlogController extends Controller {

    public function __construct() {
        
    }

    public function showBlogs2021() {
        return view('webpage.blog.2021');
    }
    
}
