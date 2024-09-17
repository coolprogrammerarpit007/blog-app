<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function(){
//     return view('home');
// });


// you can write a basic shortcut of above route too.

Route::view('/test','home');

// now to pass data through routes.
Route::get('/about/{name}',function($name){
    // echo $name;
    return view('about',['name' => $name]);
});

//  Redirect using the laravel.

Route::redirect('/home','/');

// calling the controller
Route::get('/user',[UserController::class,'getUserName']);
Route::get('/new-user/{name}',[UserController::class,'newUserName']);

