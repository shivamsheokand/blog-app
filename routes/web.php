<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    return view('home');
})->middleware('login');
Route::get('/about', function () {
    return view('about');
})->middleware('login');

Route::get('/profile', [ProfileController::class,'profile'])->middleware('login');
Route::get('/editprofile', [ProfileController::class,'profileedit'])->middleware('login');
Route::get('/logout', [ProfileController::class,'Logout']);
Route::post('/editprofile', [ProfileController::class,'editprofile'])->middleware('login');
Route::post('/updateprofile', [ProfileController::class,'updateprofile'])->middleware('login');

Route::get('/signup',[UserController::class,'signup']);
Route::get('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout'])->middleware('login');



Route::post('/signup',[UserController::class,'signupform']);
Route::post('/login',[UserController::class,'loginform']);

Route::view('/home','home')->middleware('login'); 
Route::get('/create',[BlogController::class,'create'])->middleware('login');
Route::post('/upload',[BlogController::class,'uploadBlog'])->middleware('login');

Route::get('/blogs',[BlogController::class,'blogs'])->middleware('login');
Route::get('/myblogs',[BlogController::class,'myblogs'])->middleware('login');


Route::get('/blogs/{id}',[BlogController::class,'getblogs'])->middleware('login');
Route::post('/blogsedit',[BlogController::class,'blogsedit'])->middleware('login');
Route::get('/blogsedit/{id}',[BlogController::class,'getblogsedit'])->middleware('login');
Route::get('/blogsdelete/{id}',[BlogController::class,'blogsdelete']);