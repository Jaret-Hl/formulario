<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class photosController extends Controller
{
    public function create(){
        return view('upload');
    }

    public function store(Request $request){
        dd($request);
    }
}
