<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('error',function(){abort('404');});
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('nosotros',[App\Http\Controllers\Webpage\AboutUsController::class, 'showAboutUS']);
Route::get('galeria',[App\Http\Controllers\Webpage\GalleryController::class, 'showGallery']);

Route::get('servicios!=diseno_web',[App\Http\Controllers\Webpage\ServicesController::class, 'showWebDesign']);
Route::get('servicios!=marketing_digital',[App\Http\Controllers\Webpage\ServicesController::class, 'showDigitalMarketing']);