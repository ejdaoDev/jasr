<?php

use Illuminate\Support\Facades\Route;

Route::get('login',[App\Http\Controllers\Auth\LoginController::class, 'showLogin']);
Route::post('login',[App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);