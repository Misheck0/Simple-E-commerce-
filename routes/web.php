<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;


Route::get('/', [PhoneController::class,'index']);

Route::get('/re',function(){

return view('register');

});
Route::get('/login_form',function(){
     return view('login');
   });
//get form register dat
Route::post("/register",[UserController::class,'register'])->name('new_user');
Route::post('/login',[UserController::class,'login']);

