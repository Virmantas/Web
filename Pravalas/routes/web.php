<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Logoutcontroller;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LikedPostController;
use App\Http\Controllers\PostController;

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,'store']);

Route::post('/logout',[Logoutcontroller::class,'store'])->name('logout');

Route::get('/login',[Logincontroller::class,'Login'])->name('login');

Route::post('/login',[Logincontroller::class,'store']);

Route::get('/help',[HelpController::class,'help'])->name('help');

Route::get('/about',[AboutController::class,'about'])->name('about');


Route::get('/books',[PostController::class,'index'])->name('books');

Route::get('/insert',[PostController::class,'create'])->name('insert');

Route::get('/test',[PostController::class,'show'])->name('test');

Route::post('/insert',[PostController::class,'store']);

Route::post('/test/{post}/likes',[LikedPostController::class,'store']);

Route::get('/', function () {
    return view('home');
})->name('home');;



