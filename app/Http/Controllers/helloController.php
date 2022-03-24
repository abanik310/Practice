<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

class helloController extends Controller
{
    public function login(Request $req)
    {
        //return ['name'=>"Anik"];
        $req->validate([
            'uname' => 'max:6',
            'psw' => 'min:5'
        ]);
        
        return view('home',['user'=>$req]);
    }
}
