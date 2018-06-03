<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Women;

class WomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $women=Women::all();
        return view('productswomen.index')->with('women',$women);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productswomen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 $this->validate($request,[
 'name'=>'required',
 'price'=>'required',
 'image'=>'required',
 'description'=>'required'
       
         ]);
 $women= new Women;

 $women_image=$request->image;

 $women_image_new_name=time(). $women_image->getClientOriginalName();

 $women_image->move('uploads/shoes/',$women_image_new_name);

 $women->name=$request->name;

 $women->price=$request->price;

 $women->image='uploads/shoes/'.$women_image_new_name;


 $women->description=$request->description;


 $women->save();

 return redirect()->route('productswomen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $women=Women::find($id);

        $women->delete();


        return redirect()->back();
    }
}
