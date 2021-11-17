<?php

use Illuminate\Support\Facades\Route;

Route::get('blogs!=2021', [App\Http\Controllers\Webpage\Blogs\Blog2021Controller::class, 'showBlogs2021']);
Route::get('blogs!=2021!=proyecto_base_de_laravel_con_admin_lte', [App\Http\Controllers\Webpage\Blogs\Blog2021Controller::class, 'showBlog001']);
Route::get('blogs!=2021!=como_subir_imagenes_desde_front_laravel_a_back_laravel', [App\Http\Controllers\Webpage\Blogs\Blog2021Controller::class, 'showBlog002']);
Route::get('blogs!=2021!=dashboard_gratuito_con_angular_material', [App\Http\Controllers\Webpage\Blogs\Blog2021Controller::class, 'showBlog003']);

