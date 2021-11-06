<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;

class ServicesController extends Controller {

    public function __construct() {
        
    }

    public function showWebDesign() {
        $title = 'JASR | Diseño Web';
        return view('webpage.services.DesignWeb', compact('title'));
    }
    
    public function showYouOwnSoft() {
        $title = 'JASR | Tu Propio Software';
        return view('webpage.services.YouOwnSoft', compact('title'));
    }

    public function showDigitalMarketing() {
        $title = 'JASR | Marketing Digital';
        return view('webpage.services.MarketingDigital', compact('title'));
    }
    
    public function showConsultories() {
        $title = 'JASR | Consultorias';
        return view('webpage.services.Consultories', compact('title'));
    }

}
