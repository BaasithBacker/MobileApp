@extends('theme3')


@section('content')

<body>
  <header>
    <!-- Header Start -->

                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
  </header>
  <main>
      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($item as $i)
                  <tr>
                    <td>
                      
                      <div class="media">
                        <div class="d-flex">
                          <img width="150" height="100" src="{{ URL ::asset('assets/img/gallery/'.$i->cart->image) }}" />
                        </div>
                        <div class="media-body">
                          <p>{{ $i->cart->iname }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>Rs.{{ $i->cart->isprice }}</h5>
                    </td>
                    <td>
                     <h5>{{ $i->qty }}</h5>

                      {{-- <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div> --}}
                    </td>
                    <td>
                      <h5>Rs.{{ $i->qtyprice }}</h5>
                    </td>

                    <td>
                      <a href="/removecart/{{ $i->id }}" class="btn tn-primary">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  
                  <tr class="bottom_button">
                    <td>
                      <a class="btn_1" href="/Cshop">Update Cart</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="cupon_text float-right">
                        <a class="btn_1-disabled" href="#">Close Coupon</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5>Rs.{{ $total }}</h5>
                    </td>
                  </tr>
                  <tr class="shipping_area">
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Shipping</h5>
                    </td>
                    <td>
                      <div class="shipping_box">
                        <ul class="list">
                         
                          <li>
                            Free Shipping
                            
                          </li>
                          
                        </ul>
                      
                 
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="/Cshop">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="/checkout">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
  

 @endsection