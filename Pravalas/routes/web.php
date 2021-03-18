<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;

Route::get('/register',[RegisterController::class,'index'])->name('register');


Route::get('/', function () {
    // return view('welcome');
    return view('posts.main');
});



