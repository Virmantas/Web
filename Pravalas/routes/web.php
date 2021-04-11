<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Logoutcontroller;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InsertBookController;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/logout',[Logoutcontroller::class,'store'])->name('logout');

Route::get('/login',[Logincontroller::class,'Login'])->name('login');

Route::post('/login',[Logincontroller::class,'store']);

Route::get('/help',[HelpController::class,'help'])->name('help');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/insert',[InsertBookController::class,'Insert'])->name('insert');

Route::get('/', function () {
    return view('posts.main');
});



