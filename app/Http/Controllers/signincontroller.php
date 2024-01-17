<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signincontroller extends Controller
{
    public function signin(){
        return view('login');
    }
}
