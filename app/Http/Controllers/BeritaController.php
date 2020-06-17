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

    public function show()
    {
        $beritas = Berita::all();
        return view('beritaform')->with('beritas', $beritas);

    }

    public function edit($id)
    {
        $beritas= Berita::find($id);
        return view('beritaupdate')->with('beritas',$beritas);
    }

    public function update(Request $request, $id)
    {
        $beritas = Berita::find($id);

        $beritas->title = $request->input('title');
        $beritas->content = $request->input('content');
        
        if ($request->file('image')){
            $file = $request->file('image');
            $filename= time().".". $file->getClientOriginalExtension();
            $location= public_path('/uploads/berita/');
            $file->move($location,$filename);
            $beritas->image = $filename;
        }
        $beritas->save();

        return redirect('/berita')->with('beritas',$beritas);



    }
 
    
    public function delete($id)
    {
        $beritas = Berita::find($id);
        $beritas->delete();

        return redirect('/berita')->with('beritas',$beritas);
    }
}
