<?php

use Illuminate\Support\Facades\Route;

Route::get('servicios!=diseno_web',[App\Http\Controllers\Webpage\ServicesController::class, 'showWebDesign']);
Route::get('servicios!=tu_propio_software',[App\Http\Controllers\Webpage\ServicesController::class, 'showYouOwnSoft']);
Route::get('servicios!=marketing_digital',[App\Http\Controllers\Webpage\ServicesController::class, 'showDigitalMarketing']);
Route::get('servicios!=consultorias',[App\Http\Controllers\Webpage\ServicesController::class, 'showConsultories']);
