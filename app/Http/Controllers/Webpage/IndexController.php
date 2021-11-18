<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs\Blog;
//use Illuminate\Support\Facades\Artisan;

class IndexController extends Controller {

    public function index() {
        /*echo Artisan::call('config:clear');
        echo Artisan::call('config:cache');
        echo Artisan::call('cache:clear');
        echo Artisan::call('route:clear');*/
        $blogs = Blog::select()->orderBy("id", "DESC")->take(3)->get();
        if (Auth::guest()) {
            if ($_SERVER['REMOTE_ADDR'] == '::1')
                $ipuser = '';
            else
                $ipuser = $_SERVER['REMOTE_ADDR'];
            $geoPlugin_array = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ipuser));
            $currencyCode = $geoPlugin_array['geoplugin_currencyCode'];
            return view('webpage.index', compact('currencyCode','blogs'));
        }else {
            $currencyCode = 'COP';
            return view('webpage.index', compact('currencyCode','blogs'));
        }
    }
   
}
