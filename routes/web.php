<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
Route::get('/', function () {
    return view('home');
});

Route::get('/profile', [ProfileController::class,'profile']);
Route::get('/signup',[UserController::class,'signup']);
Route::get('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);



Route::post('/signup',[UserController::class,'signupform']);
Route::post('/login',[UserController::class,'loginform']);

Route::view('/home','home')->middleware('login'); ;