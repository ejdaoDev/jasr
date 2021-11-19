<?php

use Illuminate\Support\Facades\Route;

Route::get('error',function(){abort('404');});
Route::get('countVisitsIndex',[App\Http\Controllers\Dashboard\Visits\VisitPageController::class, 'countVisitIndex']);
Route::get('countVisitsBlog/{id}',[App\Http\Controllers\Dashboard\Visits\VisitBlogController::class, 'countVisitBlog']);
Route::get('/',[App\Http\Controllers\Webpage\IndexController::class, 'index']);
Route::get('nosotros',[App\Http\Controllers\Webpage\AboutUsController::class, 'showAboutUS']);
Route::get('galeria',[App\Http\Controllers\Webpage\GalleryController::class, 'showGallery']);
Route::get('contactanos',[App\Http\Controllers\Webpage\ContactUsController::class, 'showContactUs']);
Route::post('send-mail', [App\Http\Controllers\Webpage\IndexController::class, 'sendMail']);
