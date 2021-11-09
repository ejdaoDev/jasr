<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller {

    public function __construct() {
     
    }

    public function showAboutUs() {
        return view('webpage.aboutUs');
    }

}
