<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    return view('home');
})->middleware('login');

Route::get('/profile', [ProfileController::class,'profile'])->middleware('login');
Route::get('/signup',[UserController::class,'signup']);
Route::get('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout'])->middleware('login');



Route::post('/signup',[UserController::class,'signupform']);
Route::post('/login',[UserController::class,'loginform']);

Route::view('/home','home')->middleware('login'); 
Route::get('/create',[BlogController::class,'create'])->middleware('login');
Route::post('/upload',[BlogController::class,'uploadBlog'])->middleware('login');

Route::get('/blogs',[BlogController::class,'blogs'])->middleware('login');
Route::get('/blogs/{id}',[BlogController::class,'getblogs'])->middleware('login');