<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class GalleryController extends Controller {

    public function __construct() {
     
    }

    public function showGallery() {
        return view('webpage.gallery');
    }

}
