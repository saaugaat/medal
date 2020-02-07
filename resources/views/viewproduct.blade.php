@php
// var_dump($product);
@endphp
@extends('layouts.app')

@section('content')

<h2>
    {{-- {{ $product['p_id'] }} --}}
    {{-- {{ $product[0]->p_id }}
    {{ $product[0]->p_name }}
    {{ $product[0]->description }}
    {{ $product[0]->image_url }} --}}
</h2>

@php
    $p = $product[0]
@endphp

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="../storage/productimage/{{$p->image_url}}" class="image-popup">
                    <img src="../storage/productimage/{{$p->image_url}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{ $p->p_name }}</h3>

                <p class="price"><span>Rs. {{$p->price}}</span></p>
                <p>{{$p->p_name}}</p>
                <p>{{$p->description}}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">

                            </div>
                            <p aria-setsize="15"><b>Order Here</b></p>
                        </div>
                        <div class="w-100"></div>



          </div>
          {{-- <p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p> --}}
          <form method="POST" action="/addtocart">
            @csrf
        <input type="hidden" value="{{$p->p_id}}" name="p_id">

            <button type="submit" class="btn btn-black py-3 px-5"> Add to cart </button>

    </form>
            </div>
        </div>
    </div>

</section>

@endsection
