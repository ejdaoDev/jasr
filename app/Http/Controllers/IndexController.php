<?php
namespace App\Http\Controllers;
//use Illuminate\Http\Request;


class IndexController extends Controller
{
     public function __construct() {    
         $this->middleware('auth')->only("home");           
        $this->middleware('admin')->only("home");
    }
    
    public function index()
    {        
        return view('webpage.index');        
    }   
    
   
}
