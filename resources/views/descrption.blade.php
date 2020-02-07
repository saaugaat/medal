@extends('layouts.frame')
@section('content')



<div class="hero-wrap hero-bread" style="background-image: url('images/illustrative-semi-acoustic-guitar-on-red-background-header.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Available Product</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				@foreach($product as $p)
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="storage/productimage/{{$p->image_url}}" class="image-popup"><img src="storage/productimage/{{$p->image_url}}" class="img-fluid" alt="Colorlib Template"></a>
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
				@php
					break;
				@endphp
				@endforeach
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Available Products</h2>
            <p>\</p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
    			@foreach ($product as $p)
				<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="product">
						<a href="product/{{ $p->p_id }}" class="img-prod"><img class="img-fluid" src="storage/productimage/{{$p->image_url}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="#">{{$p->p_name}}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span></span></p>
									</div>
									<div class="rating">
										<p class="text-right">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<form method="POST" action="/addtocart">
									@csrf
								<input type="hidden" value="{{$p->p_id}}" name="p_id">
								<p class="bottom-area d-flex px-3">
									{{-- <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a> --}}
									<button type="submit" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
								</p>
							</form>
                            </div>
						</div>
					</div>
				@endforeach


    		</div>
    	</div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>


      </div>
    </footer>
@endsection
