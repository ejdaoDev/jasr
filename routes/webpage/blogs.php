<?php

use Illuminate\Support\Facades\Route;

Route::get('blogs', [App\Http\Controllers\Webpage\Blogs\BlogController::class, 'showBlogs']);
Route::get('blogs={url}', [App\Http\Controllers\Webpage\Blogs\BlogController::class, 'showBlog']);
Route::get('blogs-{year}', [App\Http\Controllers\Webpage\Blogs\BlogController::class, 'showBlogsByYear']);
