<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InsertBookController;

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[Logincontroller::class,'Login'])->name('login');

Route::get('/help',[HelpController::class,'help'])->name('help');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/insert',[InsertBookController::class,'Insert'])->name('insert');

Route::get('/', function () {
    return view('posts.main');
});



