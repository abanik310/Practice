<?php

use App\Http\Controllers\helloController;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return view('hello');
// });
//Route::view("hello",'hello');

Route::get('login', function () {
    return view('login');
});
//Route::post("login",'helloController@login');
Route::post("home",'helloController@login');

