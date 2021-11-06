<?php
namespace App\Http\Controllers;
//use Illuminate\Http\Request;


class IndexController extends Controller
{
     public function __construct() {    

    }
    
    public function index()
    {
        $title = 'JASR | Inicio';
        return view('webpage.index', compact('title'));        
    }   
    
   
}
