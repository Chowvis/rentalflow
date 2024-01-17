<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function home(){
        return view('welcome');
    }
}
