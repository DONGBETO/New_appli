<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class filmController extends Controller
{

    public function create():View
        {
            $films = Film::all();
            return view('index',compact('films'));
        }


    public function store(Request $request):RedirectResponse
    
         {
            $valid = $request->validate([
                    'titre' => 'required|string|min:2|max:100',
                    'annee' => 'required|numeric|min:1950|max: '.date('Y'),
                    'image' => 'required|image',
                    'description' => 'required|string',
            ]);

           $input = $request->all();
           $films = new Film();
           $films->titre = $input['titre'];
           $films->annee = $input['annee'];
           $films->description = $input['description'];
           
           if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = 2*time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/uploads/images';
                $file = move_uploaded_file($path,$filename);
                $films->image = $filename;
           }

            $films->save();
            return redirect()->route('index')->with('success','votre film a été ajouté avec succès !!');
         }

         public function show(Film $film):View
            {
                return view('show',compact('film'));
            }

}