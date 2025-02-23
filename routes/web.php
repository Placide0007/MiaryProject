<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/home',function(){
    return view('home.index');
})->name('home');


Route::get('/register',[AuthController::class,'registerForm'])->name('register');
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);


Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::resource('cultures',CultureController::class);
Route::resource('posts',PostController::class);
Route::resource('comments',CommentController::class);

