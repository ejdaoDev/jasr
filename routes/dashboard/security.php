<?php

use Illuminate\Support\Facades\Route;

Route::get('home', [App\Http\Controllers\Dashboard\HomeController::class, 'home']);
Route::get('clearCache', [App\Http\Controllers\Dashboard\HomeController::class, 'clearCache']);
Route::get('create-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormCreateUser']);
Route::post('create-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'CreateUser']);
Route::get('edit-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormEditUser']);
Route::get('activateUser/{id}', [App\Http\Controllers\Dashboard\Security\UserController::class, 'activateUser']);
Route::get('inactivateUser/{id}', [App\Http\Controllers\Dashboard\Security\UserController::class, 'inactivateUser']);