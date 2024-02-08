<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function gotodashboard(){
        return view('dashboard.dashboard');
    }

    public function edituser(){
        $user = auth()->user();
        return view('dashboard.edituser',compact('user'));
    }

    public function updateuser(User $user,Request $request){
        $validate = request()->validate([
            'fname' => 'required|min:2|max:30',
            'lname' =>  'required|min:2|max:30',

        ]);
        $user->update($request->all());
        return redirect()->route('dashboard')->with('success','User Updated Successfully');


    }
}
