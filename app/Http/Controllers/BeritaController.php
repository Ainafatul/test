<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        return view('berita');
    }

    public function store(Request $request)    
    {

        Berita::create($request->except("image"));
       $berita = Berita::all()->last();
        
        if ($request->file('image')){
            $file = $request->file('image');
            $filename= time().".". $file->getClientOriginalExtension();
            $location= public_path('/uploads/berita/');
            $file->move($location,$filename);
            $berita->image = $filename;
        }
        $berita->save();

             
        return response()->json([
            'success'=>true,
            'message' =>'berita created'
        ]);

        


    //    $berita = new Berita();
    //    $berita->title = $request->input('title');
    //    $berita->content = $request->input('content');
       
    //    if ($request->hasfile('image')){
    //        $file = $request->file('image');
    //        $extension = $file->getClientOriginalExtension(); //getting image extension
    //        $fillname = time(). '.' . $extension;
    //        $file->move('uploads/berita/', $fillname);
    //        $berita->image = $fillname;
    //    } else {
    //        return $request;
    //        $berita->image ='';
    //    }

    //    $berita->save();

    //    return view('berita')->with('berita', $berita);
    }

    public function show(Berita $berita)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function delete($id)
    {
        //
    }
}
