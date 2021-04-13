<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class BiblioController extends Controller
{
    public function biblio() { 
        $livres = Livre::all();
        return view('biblio')->with(['livres'=>$livres]);
    }

}
