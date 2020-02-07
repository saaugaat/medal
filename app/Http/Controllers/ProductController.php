<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index(){

        return view('admin.addproduct');
    }

    public function create()
    {
        // return view('admin.addproduct');
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


        return redirect('/product')->with('success','Prduct added sucessfully');
    }

    public function show($id)
    {
        // die($id);
        // $product = Product::where('p_id', $id)->get('p_name');
        // $product = Product::find(8);
        $product = DB::select("SELECT `p_id`, `p_name`, `price`, `description`, `image_url`, `created_at`, `updated_at` FROM `products` WHERE p_id = $id");
        // return $product;
        return view ('viewproduct')->with('product', $product);
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
