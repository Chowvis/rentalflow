<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingscontroller extends Controller
{
    public function gotosettings(){
        return view("dashboard.setting");
    }
}
