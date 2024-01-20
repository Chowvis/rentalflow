<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request){
        $credential = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credential)){
            return view('dashboard.skeleton');
        }

        return back()->with('failed','Invalid Password or Email Please try again');

    }
}
