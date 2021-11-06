<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller {

    public function __construct() {
     
    }

    public function showAboutUs() {
        $title = 'JASR | Nosotros';
        return view('webpage.aboutUs', compact('title'));
    }

}
