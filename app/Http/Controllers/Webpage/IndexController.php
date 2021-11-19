<?php

namespace App\Http\Controllers\Webpage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactUsMailable;

class IndexController extends Controller {

    public function index() {
        $blogs = Blog::select()->orderBy("id", "DESC")->take(3)->get();
        if (Auth::guest()) {
            if ($_SERVER['REMOTE_ADDR'] == '::1')
                $ipuser = '';
            else
                $ipuser = $_SERVER['REMOTE_ADDR'];
            $geoPlugin_array = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ipuser));
            $currencyCode = $geoPlugin_array['geoplugin_currencyCode'];
            return view('webpage.index', compact('currencyCode', 'blogs'));
        }else {
            $currencyCode = 'COP';
            return view('webpage.index', compact('currencyCode', 'blogs'));
        }
    }

    public function sendMail(Request $request) {
        json_encode($request->all());
        $mail = new contactUsMailable(json_encode($request->all()));
        Mail::to('ejdao2021@gmail.com')->send($mail);
        return redirect('/');
    }

}
