<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiblioController extends Controller
{
    public function biblio() { 
        return view('biblio');
    }
}
