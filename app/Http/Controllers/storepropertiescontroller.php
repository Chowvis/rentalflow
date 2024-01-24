<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storepropertiescontroller extends Controller
{
    public function storeproperties(){
        // $request->validate([
        //     'title' => 'required|min:4',
        //     // 'address1' => 'required',
        //     // 'address2' => 'required',
        //     // 'country' => 'required',
        //     // 'state' => 'required',
        //     // 'city' => 'required',
        //     // 'pincode' => 'required|max:7',
        //     // 'rent' => 'required',
        // ]);
        $title = request()->get('title');
        request()->validate([
            'title' => 'required|min:4',
        ]);

        echo "hello". $title;

    }
}
