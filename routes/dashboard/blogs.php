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
Route::get('create-blog', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'showFormCreateBlogs']);
Route::get('gallery', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'showGallery']);
Route::get('draft-copies', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'showDraftCopies']);
