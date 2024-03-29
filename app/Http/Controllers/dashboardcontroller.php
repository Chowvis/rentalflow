<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dashboardcontroller extends Controller
{
    public function gotodashboard(){
        $user = auth()->user();
        $properties = $user->properties->where('status','Active');
        $properT = $user->properties;//relation are used here
        $tenants = $user->tenants->where('status','Active');
        $tenanT = $user->tenants;
        return view('dashboard.dashboard',compact('properties','tenants','properT','tenanT'));
    }

    public function edituser(){
        $user = auth()->user();
        return view('dashboard.edituser',compact('user'));
    }

    public function updateuser(User $user,Request $request){
        // $id = auth()->id();
        $validate = request()->validate([
            'fname' => 'required|min:2|max:30',
            'lname' =>  'required|min:2|max:30',


        ]);

        if(request()->has('image')){
            if($user->image!==null){
                Storage::disk('public')->delete($user->image);
            }
            $path = request()->file('image')->store($user->id.'/myprofile','public');
            $user->update([
                'image' => $path,
            ]);
        }
        $user->update([
            'fname' => request()->get('fname'),
            'lname' => request()->get('lname'),
        ]);
        return redirect()->route('dashboard')->with('success','User Updated Successfully');


    }
}
