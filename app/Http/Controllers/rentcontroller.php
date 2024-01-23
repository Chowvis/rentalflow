<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rentcontroller extends Controller
{
    public function gotorent(){
        return view("rent.rent");
    }
}
