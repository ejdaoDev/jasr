<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Visits\VisitPage;
use App\Models\Blogs\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function home() {
        $visitToIndexThisMonth = VisitPage::select('count')->orderBy('id', 'desc')->first();
        $visitToIndexThisYear = VisitPage::all()->sum('count');
        $publishedBlogs = Blog::all()->where('user_id', auth()->id())->count();
        $visitsToBlogs = Blog::all()->where('user_id', auth()->id())->sum('visits');
        return view('dashboard.home', compact('visitToIndexThisMonth', 'visitToIndexThisYear', 'publishedBlogs', 'visitsToBlogs'));
    }

    public function clearCache() {
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        return redirect('http://localhost/jasr/public/home');
        //return redirect('https://jasrdesarrolloweb.com/home');
    }

}
