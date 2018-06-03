<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nike;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Nike::all();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

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
 $products= new Nike;

 $product_image=$request->image;

 $product_image_new_name=time(). $product_image->getClientOriginalName();

 $product_image->move('uploads/shoes/',$product_image_new_name);

 $products->name=$request->name;

 $products->price=$request->price;

 $products->image='uploads/shoes/'.$product_image_new_name;


 $products->description=$request->description;


 $products->save();

 return redirect()->route('products.index');
      //      $this->validate($request,[
      //   'name'=>'required',
      //   'price'=>'required',
      //   'image'=>'required',
      //   'description'=>'required'
      
      //   ]);


      //   $products=$request->image;

      //   $image_new_name=time().$image->getClientOriginalName();

      //  $image->move('/uploads/shoes',$image_new_name);


      //  $products=Nike::create([
      
      // 'name'=>$request->name,
      // 'price'=>$request->content,
      // 'image'=>'/uploads/shoes/'. $image_new_name,
      // 'description'=>$request->description
     

      //  ]);

      //  return redirect()->back();






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
        $products=Nike::find($id);

        return view('products.edit')->with('products',$products);
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
//                 $this->validate($request,[
// 'name'=>'required',
// 'price'=>'required',
// 'image'=>'required',
// 'description'=>'required'
       
//         ]);

// if($request->hasFile('image'))
// {



// $product_image=$request->image;

// $product_image_new_name=time(). $product_image->getClientOriginalName();

// $product_image->move('uploads/shoes',$product_image_new_name);

// }

// $products->name=$request->name;

// $products->price=$request->price;

// $products->image='uploads/shoes'.$product_image_new_name;

// $products->description=$request->description;


// $products->save();

// return redirect()->route('products.index');

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
        $products=Nike::find($id);

        $products->delete();


        return redirect()->back();

    }
}
