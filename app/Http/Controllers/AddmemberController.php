<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AddmemberController extends Controller
{
    public function addmember() { 
        return view('addmember');
    }

    public function store_member(){
        $data=request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
          ]);
          User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
            Session::flash('message', 'membre enregistré avec succes!'); 
            Session::flash('alert-class', 'alert-success text-center'); 
            return redirect()->back();
    }
}
