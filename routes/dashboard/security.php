<?php

use Illuminate\Support\Facades\Route;

Route::post('send-mail', [App\Http\Controllers\HomeController::class, 'sendMail']);

Route::get('home', [App\Http\Controllers\Dashboard\HomeController::class, 'home']);
Route::get('create-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormCreateUser']);
Route::post('create-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'CreateUser']);
Route::get('edit-user', [App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormEditUser']);
Route::get('activateUser/{id}', [App\Http\Controllers\Dashboard\Security\UserController::class, 'activateUser']);
Route::get('inactivateUser/{id}', [App\Http\Controllers\Dashboard\Security\UserController::class, 'inactivateUser']);
