<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class tenantcontroller extends Controller
{
    public function gototenants(){
        $user = auth()->user();
        $properties = $user->properties;
        $tenants = $user->tenants; //here tenants() is a function from user model
        return view('tenants.tenants',compact('tenants'));
    }

    public function addtenants(){
        return view('tenants.newtenants');
    }

    public function storetenants(){
        $validate= request()->validate([
            'name' => 'required|min:2',
            'contact_no' => 'required|min:10|numeric',
            'email' => 'required|email',
            'address' => 'nullable|max:300',
        ]);

        $user = auth()->id();
        $store = Tenant::create([
            'name' => request()->get('name'),
            'user_id'=>$user,
            'contact_no' => request()->get('contact_no'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
            'status' => 'Active',
        ]);

        return redirect()->route('tenants',)->with('success','Tenant has been registered successfully');
    }

    public function show(Tenant $tenant){

        return view('tenants.show',compact('tenant'));
    }

    public function edittenant(Tenant $tenant){
        return view('tenants.edittenant',compact('tenant'));
    }

    public function updatetenant(Tenant $tenant,Request $request){
        $validate= request()->validate([
            'name' => 'required|min:2',
            'contact_no' => 'required|min:10|numeric',
            'email' => 'required|email',
            'address' => 'nullable|max:300',
        ]);


        $tenant->update($request->all());
        return redirect()->route('tenants')->with('success','Tenant is Updated successfully');


    }
    public function deactivatetenant(Tenant $tenant){

        $tenant->update([
            'status' => 'Inactive',
        ]);
        return redirect()->route('tenants');


    }
    public function activatetenant(Tenant $tenant){

        $tenant->update([
            'status' => 'Active',
        ]);
        return redirect()->route('tenants');



}
}
