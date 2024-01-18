<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function signup(){
        return view('registration');
    }

}
