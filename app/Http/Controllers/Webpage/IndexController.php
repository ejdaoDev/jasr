<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {

    public function index() {
        if (Auth::guest()) {
            if ($_SERVER['REMOTE_ADDR'] == '::1')
                $ipuser = '';
            else
                $ipuser = $_SERVER['REMOTE_ADDR'];
            $geoPlugin_array = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ipuser));
            //echo 'Continente: ' . $geoPlugin_array['geoplugin_continentCode'];
            //echo ' Pais: ' . $geoPlugin_array['geoplugin_countryName'];
            //echo ' Moneda: ' . $geoPlugin_array['geoplugin_currencyCode'];
            $currencyCode = $geoPlugin_array['geoplugin_currencyCode'];
            return view('webpage.index', compact('currencyCode'));
        }else {
            $currencyCode = 'COP';
            return view('webpage.index', compact('currencyCode'));
        }
    }

}
