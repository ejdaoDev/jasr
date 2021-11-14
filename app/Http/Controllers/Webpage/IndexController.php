<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index() {
        return view('webpage.index');
    }

}
