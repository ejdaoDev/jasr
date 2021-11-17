<?php

use Illuminate\Support\Facades\Route;

Route::get('create-blog', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'showFormCreateBlogs']);
Route::post('create-blog', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'createBlog']);

Route::get('gallery', [App\Http\Controllers\Dashboard\Blogs\GalleryController::class, 'showGallery']);
Route::post('upload-images', [App\Http\Controllers\Dashboard\Blogs\GalleryController::class, 'uploadImages']);
Route::get('delete-image/{id}/{image}', [App\Http\Controllers\Dashboard\Blogs\GalleryController::class, 'deleteImages']);

Route::get('draft-copies', [App\Http\Controllers\Dashboard\Blogs\BlogController::class, 'showDraftCopies']);
