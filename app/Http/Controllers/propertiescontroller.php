<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class propertiescontroller extends Controller
{
    public function gotoproperties(){
        $user = auth()->user();
        $properties = $user->properties()->orderBy('created_at', 'desc')->get();

        return view('properties.properties',compact('properties'));
    }

    public function addproperties(){

        return view('properties.newproperty');
    }






}
