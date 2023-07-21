<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\photoRequest;



class photoController extends Controller
{
    public function create():View
        {
            return view('photo');
        }

    public function store(photoRequest $request)
        {
            if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = 2*time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/asset/images';
                $file->move($path,$filename);
                
            }
        }

    public function message():View
        {
            return view('photo_ok');
        }
}