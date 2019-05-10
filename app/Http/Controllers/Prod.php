<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class Prod extends Controller
{
    public function index()
    {
        $data = Api::all();
        return $data;
    }
}
