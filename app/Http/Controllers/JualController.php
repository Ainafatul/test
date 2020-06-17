<?php

namespace App\Http\Controllers;

use App\Jual;
use Illuminate\Http\Request;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juals = Jual::all();
        return view('jual',compact('juals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'image' =>'required',
            'image.*' => 'image|mimes:jpeg,png,,jpg,gif,svg|max:2048'
       ]) ;

       Jual::create($request->except("image"));
       $juals = Berita::all()->last();
        
        if ($request->hasfile('image')){

            foreach($request->file('image') as $image)
            {
                $name = $image->getClientOriginalExtension();
                $location= public_path('/uploads/jual/');
                $image->move($location,$name);
                $data[]= $name;
            }
           
        }
        $juals= new Jual();
        $juals->image= json_encode($data);

        $juals->save();

             
       return back()-> with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function show(Jual $jual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function edit(Jual $jual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jual $jual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jual $jual)
    {
        //
    }
}
