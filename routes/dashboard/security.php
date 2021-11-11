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

Route::post('send-mail', [App\Http\Controllers\HomeController::class, 'sendMail']);

Route::get('home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('create-user',[App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormCreateUser']);
Route::post('create-user',[App\Http\Controllers\Dashboard\Security\UserController::class, 'CreateUser']);
Route::get('modify-user',[App\Http\Controllers\Dashboard\Security\UserController::class, 'showFormModifyUser']);
Route::get('activateUser/{id}',[App\Http\Controllers\Dashboard\Security\UserController::class, 'activateUser']);
Route::get('inactivateUser/{id}',[App\Http\Controllers\Dashboard\Security\UserController::class, 'inactivateUser']);
