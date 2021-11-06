<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class ContactUsController extends Controller {

    public function __construct() {
     
    }

    public function showContactUs() {
        $title = 'JASR | Contactanos';
        return view('webpage.contactUs', compact('title'));
    }

}
