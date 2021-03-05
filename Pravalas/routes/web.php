<?php

use Illuminate\Support\Facades\Route;


Route::get('/posts', function () {
    // return view('welcome');
    return view('posts.index');
});
