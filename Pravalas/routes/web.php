<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;

Route::get('/register',[RegisterController::class,'index'])->name('register');

//Route::get('/login',[RegisterController::class,'Login'])->name('login');
Route::get('/login',[Logincontroller::class,'Login'])->name('login');

Route::get('/', function () {
    // return view('welcome');
    return view('posts.main');
});



