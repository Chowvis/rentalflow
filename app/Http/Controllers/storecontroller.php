<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class storecontroller extends Controller
{
    public function store(){
        $fname = request()->get('firstname');
        $lname = request()->get('lastname');
        $email = request()->get('email');
        $pass = request()->get('password');


        request()->validate([
            'firstname' => 'required|min:2|max:30',
            'lastname' =>  'required|min:2|max:30',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8',
        ]);

        $backup = User::create([
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' => $pass,
        ]);
        return redirect()->route('signin')->with('success','You have successfully registered, Please Login');
    }
}
