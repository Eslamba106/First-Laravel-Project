<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController ;
use App\Http\Controllers\ComputersController ;


Route::get('/',[StaticController::class, 'index'])->name('home.index');
Route::get('/about',[StaticController::class , 'about'])->name('home.about');
Route::get('/contact', [StaticController::class,'contact'])->name('home.contact');


Route::resource('computers' , ComputersController::class);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/store/{category?}/{item?}', function ($category = null , $item = null) {


//     $filt = request('style');

//     if(isset($filt)){
//         return'<h1>this page is viewing <span style="color:red">'.strip_tags($filt).'</span></h1>';
//     }

//     return "<h1>{$category}</h1>";
//     if(isset($category)){
//         if(isset($item)){
//             return "<h1>{$it}</h1>";
//         }
//         return "<h1>{$categoery}</h1>";
//     }

//         return'<h1>Store Badawy</h1>';
// });
