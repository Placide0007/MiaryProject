<?php

use App\Http\Controllers\AudioFileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('posts',PostController::class);
Route::apiResource('cultures',CultureController::class);
Route::apiResource('comments',CommentController::class);
Route::apiResource('audio-files',AudioFileController::class);
Route::post('register',[RegisterController::class , 'store']);
Route::post('/login',[RegisterController::class , 'login']);



