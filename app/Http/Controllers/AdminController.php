<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function updateAdmin(Request $request){
       $request->validate([
        'name'=>'required',
        'firstname'=>'required',
        'email'=>'required',
       ]);

       return redirect('./admin/profile')->with('status', 'Modification fait avec succes');
    }
}
