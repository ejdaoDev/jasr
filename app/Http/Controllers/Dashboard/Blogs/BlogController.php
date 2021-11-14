<?php

namespace App\Http\Controllers\Dashboard\Blogs;

use App\Http\Controllers\Controller;

class BlogController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function showFormCreateBlogs() {
        return view('dashboard.modules.blogs.CreateBlog');
    }

    public function showGallery() {
        return view('dashboard.modules.blogs.Gallery');
    }

    public function showDraftCopies() {
        return view('dashboard.modules.blogs.DraftCopies');
    }

}
