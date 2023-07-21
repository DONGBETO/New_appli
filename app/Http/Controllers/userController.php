<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    public function create()
       {
            return view('users');# code...
       }

    public function store(Request $request):string
       {
             return 'Votre nom est ' . $request->input('nom');
       }

}
/*
session (['nom' => 'Emmanuel']);
$valeur = session('nom');
*/