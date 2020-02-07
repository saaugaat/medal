<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ViewController extends Controller
{
    public function about(){
        return view ('about');
    }
    public function welcome(){
        $products=Product::all();
        return view ('welcome')->with('products',$products);
    }
    public function descrption(){
        $product=Product::all();
        return view ('descrption')->with('product',$product);
    }


}
