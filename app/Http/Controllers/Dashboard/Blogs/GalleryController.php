<?php

namespace App\Http\Controllers\Dashboard\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs\BlogsImages;
use Carbon\Carbon;

class GalleryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function showGallery() {
        $images = BlogsImages::where('created_by', auth()->id())->orderBy("id", "DESC")->paginate(6);
        return view('dashboard.modules.blogs.Gallery', compact('images'));
    }

    public function deleteImages($id,$route) {
        $image = BlogsImages::find($id);
        $image->delete();
        //$OldImage = '/home/jasrdesa/public_html/assets/dashboard/img/blogs/'.$route; //en produccion
        //unlink($OldImage);
    }
    
    public function uploadImages(Request $request) {
        $files = $request->file('images');
        $now = Carbon::now()->format('dmYhis');
        $counter = 0;
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            if ($ext === "jpeg" | $ext === "jpg" | $ext === "png" |
                    $ext === "JPEG" | $ext === "JPG" | $ext === "PNG") {
                $file->move('assets/dashboard/img/blogs', $name);
                rename("assets/dashboard/img/blogs/" . $name, "assets/dashboard/img/blogs/" . $now . $counter . "." . $ext);
                $NewImage["route"] = $now . $counter . "." . $ext;
                $NewImage["created_by"] = auth()->id();
                BlogsImages::create($NewImage);
                $counter++;
            }
        }
        return back();
    }
}
