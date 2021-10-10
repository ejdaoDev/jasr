<?php

use Illuminate\Support\Facades\Route;

Route::get('error',function(){abort('404');});
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('nosotros',[App\Http\Controllers\Webpage\AboutUsController::class, 'showAboutUS']);
Route::get('galeria',[App\Http\Controllers\Webpage\GalleryController::class, 'showGallery']);

Route::get('servicios!=diseno_web',[App\Http\Controllers\Webpage\ServicesController::class, 'showWebDesign']);
Route::get('servicios!=tu_propio_software',[App\Http\Controllers\Webpage\ServicesController::class, 'showYouOwnSoft']);
Route::get('servicios!=marketing_digital',[App\Http\Controllers\Webpage\ServicesController::class, 'showDigitalMarketing']);
Route::get('servicios!=consultorias',[App\Http\Controllers\Webpage\ServicesController::class, 'showConsultories']);

Route::get('contactanos',[App\Http\Controllers\Webpage\ContactUsController::class, 'showContactUs']);

Route::get('blogs!=2021',[App\Http\Controllers\Webpage\BlogController::class, 'showBlogs2021']);



