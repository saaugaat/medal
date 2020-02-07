<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $cart=DB::table('carts')
        ->join('products', 'products.p_id', '=', 'carts.p_id')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'carts.user_id')

                 ->where('carts.user_id', '=', auth::user()->id);
        })
        ->get();


        return view('cart')->with('cart',$cart);
    }

    public function store(Request $request){

        $cart=new Cart();
        $cart->p_id=$request->input('p_id');
        $cart->user_id=auth::user()->id;
        $cart->piece=1;
        $cart->save();

        return redirect('/cart')->with('success',"Product added to cart");

    }

    public function checkout(){

        $cart=DB::table('carts')
        ->join('products', 'products.p_id', '=', 'carts.p_id')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'carts.user_id')

                 ->where('carts.user_id', '=', auth::user()->id);
        })
        ->get();

        $total=0;
        foreach ($cart as $c ) {
            $total+=$c->price;
        }

        return view('checkout')->with('total',$total);
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
        $cart=DB::table('carts')
        ->join('products', 'products.p_id', '=', 'carts.p_id')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'carts.user_id')

                 ->where('carts.user_id', '=', auth::user()->id);
        })
        ->get();


        return view('cart')->with('cart',$cart);
    }
}
