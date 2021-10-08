<?php
namespace App\Http\Controllers;
//use Illuminate\Http\Request;


class HomeController extends Controller
{
     public function __construct() {    
         $this->middleware('auth')->except("index","redirectToDomain");           
        $this->middleware('admin')->except("index","redirectToDomain");
    }    
   
    
    public function home()
    {
        return view('dashboard.home');        
    }

}
