<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuteurController extends Controller
{
    public function auteur() { 
        return view('auteur');
    }
}
