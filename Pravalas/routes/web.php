<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Logoutcontroller;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LikedPostController;
use App\Http\Controllers\PostController;
use Illuminate\Database\Schema\PostgresSchemaState;

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('/books',[PostController::class,'find'])->name('find');

Route::get('/category',[PostController::class,'findByCategory'])->name('findCategory');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::post('/logout',[Logoutcontroller::class,'store'])->name('logout');

Route::get('/login',[Logincontroller::class,'Login'])->name('login');
Route::post('/login',[Logincontroller::class,'store']);
Route::get('/update',[Logincontroller::class,'getUsersCredentials'])->name('user.update');
Route::post('/update',[Logincontroller::class,'setUsersCredentials']);


Route::get('/help',[HelpController::class,'help'])->name('help');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/insert',[PostController::class,'create'])->name('insert');

Route::get('/test',[PostController::class,'show'])->name('test');
Route::post('/insert',[PostController::class,'store']);
Route::delete('/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Route::get('/info',[PostController::class,'aboutBookById'])->name('posts.info');

Route::get('/change',[PostController::class,'getBookById'])->name('post.edit');
Route::post('/change',[PostController::class,'storeBooks']);

Route::post('/books/{post}/likes',[LikedPostController::class,'store'])->name('likes');
Route::delete('/books/{post}/likes',[LikedPostController::class,'destroy'])->name('likes');
Route::get('/likedBooks',[LikedPostController::class,'liked'])->name('liked');


