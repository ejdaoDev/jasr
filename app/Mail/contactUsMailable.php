<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class contactUsMailable extends Mailable {

    use Queueable,
        SerializesModels;

    public $subject = "JASR | Mensaje desde la página web";
    public $name;
    public $email;
    public $phone;
    public $content;
    public $date;
    public $location;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request) {
        if ($_SERVER['REMOTE_ADDR'] == '::1')
            $ipuser = '';
        else
            $ipuser = $_SERVER['REMOTE_ADDR'];
        $geoPlugin_array = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ipuser));
        $body = json_decode($request);
        $this->name = str_replace(array("á", "é", "í", "ó", "ú", "ñ"), array("a", "e", "i", "o", "u", "n"), (trim($body->name)));
        $this->email = $body->email;
        $this->phone = $body->phone;
        $this->content = $body->message;
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $fecha = Carbon::parse(Carbon::now());
        $mes = $meses[($fecha->format('n')) - 1];
        $date = $fecha->format('d') . "/" . $mes . "/" . $fecha->format('Y') . " a las ".$fecha->format('h:i:s A');
        $this->date = $date;
        $location =  $geoPlugin_array['geoplugin_city'].", ". $geoPlugin_array['geoplugin_region'];
        $this->location = $location;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('emails.contactus');
    }

}
