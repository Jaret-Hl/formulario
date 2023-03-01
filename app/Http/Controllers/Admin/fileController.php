<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;


class fileController extends Controller
{
   
    public function index()
    {
        return view('admin.files.index');
    }

    
    public function create()
    {
        return view('admin.files.create');    
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'file'=> 'required|image|max:2048'
        ]);
        $imagenes = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagenes);
        
        $files = File::create([
            'url' =>$url
        ]);
        // return redirect()->route('admin.files.index');
        return view('admin.files.index',['files'=>$files]);
    }

    
    public function show($file)
    {
        return view('admin.files.show');
    }

    
    public function edit($file)
    {
        return view('admin.files.edit');
    }

    
    public function update(Request $request, $file)
    {
        //
    }

    
    public function destroy($file)
    {
        //
    }
}
