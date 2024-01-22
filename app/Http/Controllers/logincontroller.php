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

        if(auth()->attempt($credential)){
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with('failed','Invalid Password or Email Please try again');

    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect()->route('login');
    }
}
