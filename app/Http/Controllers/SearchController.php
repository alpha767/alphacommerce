<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class SearchController extends Controller

{
    public function search(Request $request){


        $query = $request->input('query');
        $products = (DB::select("SELECT * FROM produit WHERE nom LIKE '%$query%' "));
        $counter = count(DB::select("SELECT * FROM produit WHERE nom LIKE '%$query%' "));

        return view('search-results')->withProducts($products)->withCounter($counter);

    }
}
