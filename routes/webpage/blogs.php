<?php

use Illuminate\Support\Facades\Route;

Route::get('blogs!=2021',[App\Http\Controllers\Webpage\BlogController::class, 'showBlogs2021']);

