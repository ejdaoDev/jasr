<?php
namespace App\Http\Controllers;
use App\Models\Visits\VisitPage;
//use Illuminate\Http\Request;


class HomeController extends Controller
{
     public function __construct() {    
         $this->middleware('auth');           
        $this->middleware('admin');
    }    
   
    
    public function home()
    {
        $visitToIndexThisMonth = VisitPage::select('count')->orderBy('id', 'desc')->first();         
        $visitToIndexThisYear = VisitPage::all()->sum('count');         
        return view('dashboard.home', compact('visitToIndexThisMonth','visitToIndexThisYear'));        
    }

}
