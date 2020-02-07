@extends('layouts.frame')

@section('content')


    <section id="home-section" class="hero">
            <div class="hero-wrap hero-bread" style="background-image: url('images/guitar6.jpg');background-size: cover;">
		<div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url( );">
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading"> <h1>My Guitar Shop</h1></span>
		          		<div class="horizontal">
		          			<h1 class="vr" style="background-image: url();">SHOP NOW</h1>
				            <h1 class="mb-4 mt-3"> <br><span>  </span></h1>
				            <p></p>

				            {{-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Order</a></p> --}}
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/frame3.jpg);">
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading"><h1>My Guitar Shops</h1></span>
		          		<div class="horizontal">
		          			<h1 class="vr" style="background-image: url(frame3.jpg);">LIMITED TIME</h1>
				            <h1 class="mb-4 mt-3"><span></span></h1>
				            <p></p>

				            {{-- <p><a href="cart.blade.php" class="btn btn-primary px-5 py-3 mt-3"></a></p> --}}
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
        </div>
    </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Products</h2>
            <p></p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($products as $product)
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
                        {{-- <a href="product/{{ $product->p_id }}">
                        <a href="#" class="img-prod"><img class="img-fluid" src="/storage/productimage/{{ $product->image_url }}" alt="Colorlib Template">
    						<span class="status"></span>
    						<div class="overlay"></div>
                        </a>
                        </a> --}}
                        <a href="product/{{ $product->p_id }}" class="img-prod"><img class="img-fluid" src="storage/productimage/{{$product->image_url}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">{{ $product->p_name }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{ $product->price }}</span></p>
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
							<input type="hidden" value="{{$product->p_id}}" name="p_id">
    						<p class="bottom-area d-flex px-3">
								{{-- <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a> --}}
								<button type="submit" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
							</p>
						</form>
    					</div>
                    </div>
                </div>
                @endforeach
    			{{-- <div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/frame4.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Frame</a></h3>
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
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/trophi4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Trophies</a></h3>
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
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div> --}}

    		</div>
    	</div>
    </section>

@endsection






