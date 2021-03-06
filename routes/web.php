<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('post',[PostController::class,'index'])->name('post');
Route::post('post',[PostController::class,'store']);

Route::get('profile',[ProfileController::class,'index'])->name('profile.index');