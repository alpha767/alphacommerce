<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class content extends Controller
{
    function contents(){

        $produits = DB::select("SELECT * FROM produit");
       return view('contents')->withProduits($produits);
    }
}
