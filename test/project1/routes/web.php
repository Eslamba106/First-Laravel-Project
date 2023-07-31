<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController ;

use App\Http\Controllers\PostController ;

Route::get('/', [PagesController::class , 'index']);
Route::resource('/blog' ,PostController::class);











Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

