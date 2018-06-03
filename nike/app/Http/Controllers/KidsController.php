<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kids;

class KidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids=Kids::all();
        
        return view('productskids.index')->with('kids',$kids);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productskids.create');

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
 $kids= new Kids;

 $kids_image=$request->image;

 $kids_image_new_name=time(). $kids_image->getClientOriginalName();

 $kids_image->move('uploads/shoes/',$kids_image_new_name);

 $kids->name=$request->name;

 $kids->price=$request->price;

 $kids->image='uploads/shoes/'.$kids_image_new_name;


 $kids->description=$request->description;


 $kids->save();

 return redirect()->route('productskids.index');
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
        //
    }
}
