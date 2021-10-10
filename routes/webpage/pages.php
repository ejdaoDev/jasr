<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('nosotros',[App\Http\Controllers\Webpage\AboutUsController::class, 'showAboutUS']);
Route::get('galeria',[App\Http\Controllers\Webpage\GalleryController::class, 'showGallery']);
Route::get('contactanos',[App\Http\Controllers\Webpage\ContactUsController::class, 'showContactUs']);
