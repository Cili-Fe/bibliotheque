<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class BookController extends Controller
{
    public function addbook() { 
        return view('addbook');
    }

   

    function insertbook(Request $req){

        $member= new Livre;// A ce niveau je crée un objet ($member) de la classe utilisateur qui se trouve dans le model
        $member->titre = $req->input('titre');
        $member->auteur = $req->input('auteur');
        $member->pays = $req->input('pays');
        $member->type = $req->input('type');
        $member->parution = $req->input('parution');
        $member->save(); // save() permet d'enregister dans la base de données
        return redirect()->back()->with(["reponse"=>"Livre enregistré avec succès"]);

    }
}
