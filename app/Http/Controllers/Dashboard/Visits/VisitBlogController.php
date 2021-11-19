<?php

namespace App\Http\Controllers\Dashboard\Visits;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs\Blog;

class VisitBlogController extends Controller {

    public function countVisitBlog($id) {
        if (!Auth::check()) {
            $blog = Blog::findOrFail($id);
            $upd['visits'] = $blog['visits'] + 1;
            $blog->update($upd);
        }
        return response(json_encode(["message" => "ok"]), 200)->header('Content-type', 'text/plain');
    }

}
