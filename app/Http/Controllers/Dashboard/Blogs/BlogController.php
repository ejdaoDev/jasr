<?php

namespace App\Http\Controllers\Dashboard\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs\Blog;
use Carbon\Carbon;

class BlogController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function showFormCreateBlogs() {
        return view('dashboard.modules.blogs.CreateBlog');
    }

    public function createBlog(Request $request) {
        $file = $request->file('image');
        $now = Carbon::now()->format('dmYhis');
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        if ($ext === "jpeg" | $ext === "jpg" | $ext === "png" |
                $ext === "JPEG" | $ext === "JPG" | $ext === "PNG") {
            $file->move('assets/dashboard/img/blogs-principal-image', $name);
            rename("assets/dashboard/img/blogs-principal-image/" . $name, "assets/dashboard/img/blogs-principal-image/" . $now . "." . $ext);
            $blog["image"] = $now . "." . $ext;
            $blog["user_id"] = auth()->id();
            $blog['title'] = $request->title;
            $blog['content'] = $request->content;
            $blog['description'] = $request->description;
            Blog::create($blog);
            return back();
        } else {
            return back();
        }
    }

    public function showDraftCopies() {
        return view('dashboard.modules.blogs.DraftCopies');
    }

}
