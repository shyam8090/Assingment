<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
Route::get('/', [IndexController::class, 'Index']);

//Route::get('/reg',[RegistrationController::class,'Registration']);
Route::view('/reg', "registration");
Route::view('/login', "login");
//Route::get('/dashboard',  [UserController::class,'index']);


//Route::get('/login', [LoginController::class,'Login']);

Route::post('/register', [RegistrationController::class,'Register']);
Route::post('/loged', [LoginController::class,'Loged']);
Route::post('/logout', [UserController::class,'index']);





