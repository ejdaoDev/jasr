<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class ServicesController extends Controller {

    public function __construct() {
        
    }

    public function showWebDesign() {
        return view('webpage.services.DesignWeb');
    }
    
    public function showYouOwnSoft() {
        return view('webpage.services.YouOwnSoft');
    }

    public function showDigitalMarketing() {
        return view('webpage.services.MarketingDigital');
    }
    
    public function showConsultories() {
        return view('webpage.services.Consultories');
    }

}
