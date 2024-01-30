<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tenantcontroller extends Controller
{
    public function gototenants(){
        return view('tenants.tenants');
    }

    public function addtenants(){
        return view('tenants.newtenants');
    }

    public function storetenants(){
        $validate= request()->validate([
            'name' => 'required|min:2',
            'contact_no' => 'required|min:10|max:10|numeric',
            'email' => 'required|email',
            'address' => 'nullable|max:300',
        ]);
    }
}
