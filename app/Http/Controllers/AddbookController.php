<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddbookController extends Controller
{
    public function addbook() { 
        return view('addbook');
    }
}
