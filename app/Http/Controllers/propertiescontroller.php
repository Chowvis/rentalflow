<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\propertyfile;
use App\Models\Tenant;
use Illuminate\Http\Request;

class propertiescontroller extends Controller
{
    public function gotoproperties(){
        $user = auth()->user();
        $properties = $user->properties; //relation are used here
        $tenants = $user->tenants;

        return view('properties.properties',compact('properties','tenants'));
    }

    public function addproperties(){

        return view('properties.newproperty');
    }


    public function storeproperties(Request $request){
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
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'files' => 'nullable',
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
            'status' => 'Active',
            'lat' => request()->get('latitude'),
            'lng' => request()->get('longitude'),
        ]);

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            // Iterate over each file
            foreach ($files as $file) {
                $storefiles = Propertyfile::create([
                    'user_id'=>$user->id,
                    'property_id'=>$property->id,

                ]);
                // Process each file (e.g., store
                // $filename = $file->getClientOriginalName();
                $path = $file->store($user->id.'/Property'.$property->id.'/Documents','public');
                $storefiles->update([
                'files' => $path,
            ]);
                // Your code to handle each file

            }
        }



        return redirect()->route('properties')->with('success','Property is added successfully');

    }

    public function show(Property $property,propertyfile $files){
        $files=propertyfile::where('property_id','=',$property->id)->get();



        return view('properties.show',compact('property','files'));
    }

    public function editproperty(Property $property){
        return view('properties.editproperty',compact('property'));
    }

    public function updateproperty(Property $property,Request $request){
        $validate= request()->validate([
            'title' => 'required|min:4',
            'address_1' => 'required',
            'address_2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|max:6',
            'rent' => 'required',
            'description' => 'nullable|max:300',
            'lat' => 'nullable',
            'lng' => 'nullable',
        ]);


        $property->update($request->all());
        return redirect()->route('properties')->with('success','Property is Updated successfully');


    }

    public function gotoassigntenant(Property $property){
        $user = auth()->user();
        $tenants = $user->tenants;
        return view('properties.assign',compact('property','tenants'));
    }


    public function assigntenant(Property $property,Tenant $tenant){
        // $ten =  request()->validate([
        //     'tenant_id' => 'required',
        // ]);

        if($property->tenant_id===null){
            $property->tenant_id=request()->get('tenant');
            $tenant=Tenant::where('id','=',request()->get('tenant'))->first();

            $property->tenant_name = $tenant->name;
            $tenant = Tenant::findOrFail(request()->get('tenant'));
            $property->save();
            $tenant->update([
                'property_id' => $property->id,
                'property_name' => $property->title,
                'payable_rent' => $property->rent,

                // Update other fields as needed
            ]);


            return redirect()->route('properties')->with('success','Property is Updated successfully');
            }





        // return redirect()->route('properties')->with('failed','Property has already assigned');

        // $property->tenant_id=request()->get('tenant_id');
        // $property->save();
        // echo $property->tenant_id;
        // $property->update($ten);


        }

    public function unassigntenant(Property $property,Tenant $tenant){

        $tenant = Tenant::findOrFail($property->tenant_id);
        $tenant->update([
            'property_id' => null,
            'property_name' => null,
            'payable_rent' => null,

            // Update other fields as needed
        ]);
        $property->tenant_id = null;
        $property->tenant_name = null;
        $property->save();


        return redirect()->route('properties')->with('failed','Tenant has been removed');

    }

    public function deactivateproperty(Property $property){

        $property->update([
            'status' => 'Inactive',
        ]);
        return redirect()->route('properties');


    }
    public function activateproperty(Property $property){

        $property->update([
            'status' => 'Active',
        ]);
        return redirect()->route('properties');


    }



}
