<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Visits\VisitPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function sendMail(Request $request) {
        $destino1 = "ejdao2015@hotmail.com";
        $destino2 = "ejdao2019@hotmail.com";
        $destino3 = "ejdao2021@gmail.com";
        $nombre = str_replace(array("á", "é", "í", "ó", "ú", "ñ"), array("a", "e", "i", "o", "u", "n"), (trim($request->name)));
        $email = $request->email;
        $asunto = $request->phone;
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $asunto . "\nContenido: " . $request->message;
        @mail($destino1, "Contacto", $contenido);
        @mail($destino2, "Contacto", $contenido);
        @mail($destino3, "Contacto", $contenido);
        return redirect('/');
    }

}
