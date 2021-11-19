<?php

namespace App\Http\Controllers\Dashboard\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs\Blog;
use Carbon\Carbon;
use App\Models\Blogs\BlogsYear;

class BlogController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function showFormCreateBlogs() {
        return view('dashboard.modules.blogs.CreateBlog');
    }

    public function createBlog(Request $request) {
        $content = substr($request->content, 0, 10000);
        $year = Carbon::now()->format('Y');
        $count = BlogsYear::where('year', $year)->count();
        if ($count == 0) {
            $newYear['year'] = $year;
            BlogsYear::create($newYear);
        }
        $file = $request->file('image');
        $now = Carbon::now()->format('dmYhis');
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        if ($ext === "jpeg" | $ext === "jpg" | $ext === "png" | $ext === "svg" | $ext === "webp" |
                $ext === "JPEG" | $ext === "JPG" | $ext === "PNG" | $ext === "svg" | $ext === "WEBP") {
            $file->move('assets/dashboard/img/blogs-principal-image', $name);
            rename("assets/dashboard/img/blogs-principal-image/" . $name, "assets/dashboard/img/blogs-principal-image/" . $now . "." . $ext);
            $blog["image"] = $now . "." . $ext;
            $blog["user_id"] = auth()->id();
            $blog['title'] = $request->title;
            $titleWithoutAcent = str_replace(
                    array("á", "é", "í", "ó", "ú"), array("a", "e", "i", "o", "u"), (trim($request->title)));
            $titleWithoutSpecialCaracters = str_replace(
                    array("'", "#", " ", ".", '"', ",", ":", "/"), "-", strtolower(trim($titleWithoutAcent)));
            $blog['url'] = $titleWithoutSpecialCaracters;
            $blog['year'] = $year;
            $blog['content'] = $content;
            $blog['description'] = $request->description;
            \DB::beginTransaction();
            try {
                Blog::create($blog);
                \DB::commit();
                return back();
            } catch (\Throwable $e) {
                \DB::rollback();
                //$OldImage = '/home/jasrdesa/public_html/assets/dashboard/img/blogs-principal-image/'  . $now . "." . $ext; //en produccion
                $OldImage = public_path() . 'assets/dashboard/img/blogs-principal-image/' . $now . "." . $ext;
                unlink($OldImage);
                throw $e;
            }
        } else {
            return back();
        }
    }

    public function showDraftCopies() {
        return view('dashboard.modules.blogs.DraftCopies');
    }

}
