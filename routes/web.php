<?php

use Illuminate\Support\Facades\Route;

Route::get('error',function(){abort('404');});

Route::get('countVisitsIndex',[App\Http\Controllers\Webpage\Visits\VisitPageController::class, 'countVisit']);



