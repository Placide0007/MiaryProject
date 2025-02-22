<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CultureController;
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

