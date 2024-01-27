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


    public function storeproperties(){
        $validate= request()->validate([
            'title' => 'required|min:4',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|max:6',
            'rent' => 'required',
            'description' => 'nullable|max:300',
        ]);

        $user = auth()->user();
        //user id will be picked automatically by auth function
        $property = Property::create([
            'title' => request()->get('title'),
            'user_id' => $user->id,
            'address_1' => request()->get('address1'),
            'address_2' => request()->get('address2'),
            'country' => request()->get('country'),
            'state' => request()->get('state'),
            'city'  => request()->get('city'),
            'pincode' => request()->get('pincode'),
            'rent' => request()->get('rent'),
            'description' => request()->get('description'),
        ]);

        return redirect()->route('properties')->with('success','Property is added successfully');

    }

    public function show(Property $property){

        return view('properties.show',compact('property'));
    }




}
