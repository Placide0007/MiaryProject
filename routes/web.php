<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::middleware('guest')->group(function(){
    Route::get('/register',[AuthController::class,'registerForm'])->name('register');
    Route::post('/register',[AuthController::class,'register']);
    Route::get('/login',[AuthController::class,'loginForm'])->name('login');
    Route::post('/login',[AuthController::class,'login']);
});

Route::middleware('auth')->group(function(){
    Route::post('/logout',[AuthController::class,'logout']);
    Route::post('/logout',[AuthController::class,'logout']);
});

