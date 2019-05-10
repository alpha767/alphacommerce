<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{

    function marque($id){


        $produits = DB::select("SELECT * FROM produit WHERE marque_id = ".$id);
        return view('marque')->withProduits($produits);
    }
    function category($id){

        $produits = DB::select("SELECT * FROM produit WHERE category_id = ".$id);
        return view('category')->withProduits($produits);
    }
    function ficher(){

        $produits = DB::select("SELECT * FROM produit where id = $_GET[id]");
        return view('ficher-produit')->withProduits($produits);
    }



}
