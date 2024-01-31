<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class tenantcontroller extends Controller
{
    public function gototenants(){
        $user = auth()->user();
        $tenants = $user->tenants()->orderBy('created_at', 'desc')->get(); //here tenants() is a function from user model
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
            'address' => request()->get('address')
        ]);

        return redirect()->route('tenants',)->with('success','Tenant has been registered successfully');
    }
}
