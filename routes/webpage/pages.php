<?php

use Illuminate\Support\Facades\Route;

Route::get('error',function(){abort('404');});
Route::get('countVisitsIndex',[App\Http\Controllers\Webpage\Visits\VisitPageController::class, 'countVisit']);
Route::get('/',[App\Http\Controllers\Webpage\IndexController::class, 'index']);
Route::get('nosotros',[App\Http\Controllers\Webpage\AboutUsController::class, 'showAboutUS']);
//Route::get('galeria',[App\Http\Controllers\Webpage\GalleryController::class, 'showGallery']);
Route::get('contactanos',[App\Http\Controllers\Webpage\ContactUsController::class, 'showContactUs']);
