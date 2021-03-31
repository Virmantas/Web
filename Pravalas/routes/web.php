<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\HelpController;

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::get('/login',[Logincontroller::class,'Login'])->name('login');

Route::get('/help',[HelpController::class,'help'])->name('help');

Route::get('/', function () {
    return view('posts.main');
});



