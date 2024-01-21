<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propertiescontroller extends Controller
{
    public function gotoproperties(){
        return view("dashboard.properties");
    }
}
