<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propertiescontroller extends Controller
{
    public function gotoproperties(){
        return view('properties.properties');
    }

    public function addproperties(){
        return view('properties.newproperty');
    }


}
