<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tenantcontroller extends Controller
{
    public function gototenants(){
        return view('dashboard.tenants');
    }
}
