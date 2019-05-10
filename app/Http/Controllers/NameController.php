<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NameController extends Controller
{
    public function changeName(Request $request){
        $validatedData = $request->validate([
            'current-name' => 'required',
            'new-name' => 'required|string',
        ]);
//Change Password
        $user = Auth::user();
        $user->name = $request->get('new-name');
        $user->save();
        return redirect()->back()->with("success","Votre nom a été bien modifié !");
    }

}
