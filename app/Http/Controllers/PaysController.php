<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class PaysController extends Controller
{
    public function pays() { 
        $pays = Livre::all();
        return view('pays')->with(['pays'=>$pays]);
    }
}
