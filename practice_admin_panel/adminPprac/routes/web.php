<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Guest routes
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/register',[AuthController::class,'reg']);
Route::post('/register',[AuthController::class,'reg_data']);
Route::get('/login',[AuthController::class,'log']);
Route::post('/login',[AuthController::class,'valid_log']);
Route::get('/logout',[AdminController::class,'logout']);



// lawyer/admin routes
Route::middleware(['auth', 'Admin_Middleware'])->group(function () {

Route::get('/lawyerhome',[AdminController::class,'index']);

Route::get('/userlist',[AdminController::class,'userlist']);                            // user data update for Register/Login
Route::get('/edituserdata/{id}',[AdminController::class,'editdata']);
Route::put('/edituserdata/{id}',[AdminController::class,'update_data']);

Route::get('/clientlist',[AdminController::class,'clientlist']);                        // Client Mortgage data update
Route::get('/editclientdata/{id}',[AdminController::class,'client_getdata']);
Route::post('/editclientdata/{id}',[AdminController::class,'client_updata']);

Route::get('/saledeedlist',[AdminController::class,'saledeedlist']);                    // Client Sale Deed data update
Route::get('/editsaledeedlist/{id}',[AdminController::class,'saledeed_getdata']);
Route::post('/editsaledeeddata/{id}',[AdminController::class,'saledeed_updata']);

});

// client routes
Route::middleware(['auth', 'Client_Middleware'])->group(function () {

Route::get('/reg_mortgage',[HomeController::class,'reg_mort']);                 // mortgage regsitration
Route::post('/reg_mortgage',[HomeController::class,'reg_mort_data']);

Route::get('/saledeed_reg',[HomeController::class,'saledeed_reg']);             // sale deed register
Route::post('/saledeed_reg',[HomeController::class,'saledeed_reg_store']);
});

// banker routes
Route::middleware(['auth', 'Banker_Middleware'])->group(function () {

Route::get('/bankerhome',[BankerController::class,'index']);

Route::get('/bankeruserlist',[BankerController::class,'bankulist']);
Route::get('/banker_edituserdata/{client_id}',[BankerController::class,'bankulist_getdata']);       // banker mortgage register process
Route::post('/banker_edituserdata/{client_id}',[BankerController::class,'bankulist_store']);
});

