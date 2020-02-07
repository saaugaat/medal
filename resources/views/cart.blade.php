@extends('layouts.frame')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/images/guitar1.jpeg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
          <h1 class="mb-0 bread">My Cart</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                              @php
                                  $subtotal=0;
                              @endphp
                              @foreach ($cart as $c)
                              <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod"><div class="img" style="background-image:url(storage/productimage/{{$c->image_url}});"></div></td>

                                    <td class="product-name">
                                        <h3>{{$c->p_name}}</h3>
                                        <p>{{$c->description}}</p>
                                    </td>

                                    <td class="price">Rs. {{$c->price}}</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                         <input type="text" name="quantity" class="quantity form-control input-number" value="{{$c->piece}}" min="1" max="100">
                                      </div>
                                  </td>
                                  

                                    <td class="total">Rs. {{$c->price}}</td>
                                    <td>
                                      {{-- <a href="{{ $c->id }}/delete">Delete</a> --}}
                                      {{-- <a href="{{ route('cart/' . $c->id . '/delete') }}" class="btn">Delete</a> --}}
                                    <a href="cart/{{ $c->id }}/delete" class="btn">Delete</a>
                                    </td>
                                  </tr><!-- END TR-->
                                  @php
                                  $subtotal=$subtotal+$c->price;
                              @endphp

                              @endforeach

                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                      <span>Rs. {{$subtotal}}</span>
                      </p>
                      <p class="d-flex">
                          <span>Discount</span>
                          <span>Rs. 0.00</span>
                      </p>
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                          <span>Rs. {{$subtotal}}</span>
                      </p>
                  </div>
                  <p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
              </div>
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
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">My Guitar House</h2>

            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Shop</a></li>
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Journal</a></li>
              <li><a href="#" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Help</h2>
            <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                  <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQs</a></li>
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"></span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+9779860719614</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">shahil@gmail.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
        </div>
      </div>
    </div>
  </footer>

@endsection
