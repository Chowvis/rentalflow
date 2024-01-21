<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class expensescontroller extends Controller
{
    public function gotoexpenses(){
        return view("dashboard.expenses");
    }
}
