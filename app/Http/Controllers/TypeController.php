<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class TypeController extends Controller
{
    public function type() { 
        $types = Livre::all();
        return view('type')->with(['type'=>$types]);
    }
}
