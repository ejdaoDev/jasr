<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Visits\VisitPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactUsMailable;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth')->except('sendMail');
        $this->middleware('user')->except('sendMail');
    }

    public function home() {
        $visitToIndexThisMonth = VisitPage::select('count')->orderBy('id', 'desc')->first();
        $visitToIndexThisYear = VisitPage::all()->sum('count');
        return view('dashboard.home', compact('visitToIndexThisMonth', 'visitToIndexThisYear'));
    }

    public function viewMail($email) {
        return view('emails.' . $email);
    }

    public function sendMail(Request $request) {
        json_encode($request->all());
        $mail = new contactUsMailable(json_encode($request->all()));
        Mail::to('informacion@jasrdesarrolloweb.com')->send($mail);
        return redirect('/');
    }

}
