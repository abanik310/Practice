<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function hello($user)
    {
        //return ['name'=>"Anik"];
        return view('hello',['user'=>$user]);
    }
}
