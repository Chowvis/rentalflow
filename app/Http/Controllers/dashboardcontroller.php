<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function gotodashboard(){
        return view('dashboard.dashboard');
    }
}
