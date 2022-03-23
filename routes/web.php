<?php

use App\Http\Controllers\helloController;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return view('hello');
// });
//Route::view("hello",'hello');
Route::get("hello/{user}",'helloController@hello');
