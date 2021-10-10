<?php

namespace App\Http\Controllers\Webpage\Visits;

use App\Http\Controllers\Controller;
use App\Models\Visits\VisitPage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VisitPageController extends Controller {

    public function __construct() {
        
    }

    public function countVisit() {
        if (!Auth::check()) {
            $last = VisitPage::select()->orderBy('id', 'desc')->first(); //obtiene el ultimo registro
            $start = Carbon::createFromFormat('Y-m-d', $last->init_in); // obtiene fecha inicial del registro
            $startDay = $start->format('Y-m-d'); // solo deja el dia, elimina hora
            $end = Carbon::createFromFormat('Y-m-d', $last->finish_in); // obtiene fecha final del registro
            $endDay = $end->format('Y-m-d'); // solo deja el dia, elimina hora
            $today = Carbon::now()->format('Y-m-d'); //obtiene la fecha de hoy y elimina hora
            if ($today >= $startDay && $today <= $endDay) {
                $upd['count'] = $last->count + 1;
                $last->update($upd);
            } else {
                $dateFD = Carbon::now()->startOfMonth()->format('Y-m-d');
                $dateLD = Carbon::now()->endOfMonth()->format('Y-m-d');
                $new['count'] = 0;
                $new['init_in'] = $dateFD;
                $new['finish_in'] = $dateLD;
                VisitPage::create($new);
            } return response(json_encode(["message" => "ok"]), 200)->header('Content-type', 'text/plain');
        } return response(json_encode(["message" => "ok"]), 200)->header('Content-type', 'text/plain');
    }

}
