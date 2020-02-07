<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\Auth;
use DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'city'=>'required',
            'postcode'=>'required',
            'phone'=>'required'
        ]);

        $cart=DB::table('carts')
        ->join('products', 'products.p_id', '=', 'carts.p_id')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'carts.user_id')

                 ->where('carts.user_id', '=', auth::user()->id);
        })
        ->get();



        foreach ($cart as $c ) {
            $order=new order();
            $order->p_id=$c->p_id;
            $order->user_id=$c->user_id;
            $order->name=$request->fname.' '.$request->lname;
            $order->address=$request->address;
            $order->city=$request->city;
            if(!empty($request->input('addressop'))) {
                $order->address1=$request->addressop;
            }
            $order->postcode=$request->postcode;
            $order->phone=$request->phone;
            $order->save();
        }

        $cart=DB::table('carts')->where('user_id',Auth::user()->id);
        $cart->delete();

        return redirect('/cart')->with('success','Ordered Placed Successfully');


    }
}
