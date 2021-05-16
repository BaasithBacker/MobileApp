
  
@extends('theme3')


@section('content')
    

<body>
    
    <header>
     
        
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
                                <h2>Product Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <center>
                        <img width="200" height="300" src="{{ URL ::asset('assets/img/gallery/'.$product->image)}}" class="img-fluid">
                        <h3>{{ $product['iname'] }}</h3>
                        <h3>{{ $product['icolor'] }}</h3>
                    </center>
                    </div>
                   
                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h5>CostPrice:{{ $product['icprice'] }} <br>
                        </h5>
                       
                        <h4>SellingPrice: Rs.{{ $product['isprice'] }} <br>
                        </h4>
                        <form action="/addtocart" method="POST">
                            @csrf
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input name="qty" class="product_count_item input-number" type="text" value="1" min="1" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            
                        </div>
                        
                        <input type="hidden" name="item" value="{{ $product['id'] }}">
                        <br>
                        <button class="btn btn-primary">add to cart</button>
                        </form>
                    </div>
                </div>
                </div>
            
            </div>
            </div>
        </div>
        
        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Get promotions & updates!</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class="subscribe_form">
                                <input type="email" placeholder="Enter your mail">
                                <a href="#" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->
    </main>
    
@endsection

