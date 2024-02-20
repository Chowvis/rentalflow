<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingscontroller extends Controller
{
    public function gotosettings(){
        return view("settings.setting");
    }

    public function changepassword(){
        // $user = auth()->user();
        // $validate = request()->validate([
        //     'old_password' => 'required|min:8',
        //     'new_password' => 'required|min:8',
        //     'con_password' => 'required|min:8',
        // ]);
        echo 'hello';


    }
}
