<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class ServicesController extends Controller {

    public function __construct() {
     
    }

    public function showWebDesign() {
        return view('webpage.services.webDesign');
    }    
        
    public function showDigitalMarketing() {
        return view('webpage.services.digitalMarketing');
    }

}
