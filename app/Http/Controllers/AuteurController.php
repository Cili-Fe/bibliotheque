<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class AuteurController extends Controller
{
    public function auteur() { 
        $auteurs = Livre::all();
        return view('auteur')->with(['auteurs'=>$auteurs]) ;
    }
}
