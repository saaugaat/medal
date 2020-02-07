<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

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
    // public function store(Request $request)
    // {
    //     //
    // }

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


    public function index(){

        return view('admin.addproduct');
    }

    public function store(Request $request){

        $this->validate($request,[
            'product_name'=>'required',
            'price'=>'required|numeric',
            'product_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);




        $product=new Product();
        $product->p_name=$request->input('product_name');
        $product->price=(int)$request->input('price');
        $product->description=$request->input('description');

        $str="product_img";


        $filenameWithExt= $request->file($str)->getClientOriginalName();

        //get just filename
        $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //get extension
        $extension=$request->file($str)->getClientOriginalExtension();

        //filename to store
        $filenameToStore=$filename.'_'.time().'.' . $extension;

        //path to save a file
        $path=$request->file($str)->storeAs('public/productimage/',$filenameToStore);

        $product->image_url=$filenameToStore;

        $product->save();


        return redirect('/products')->with('success','Prduct added sucessfully');
    }
}
