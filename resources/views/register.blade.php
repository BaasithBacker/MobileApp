@extends('theme')


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
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Welcome Back !</h2>
                                <p>Please Sign in now Welcome Back You are valuable for us</p>
                                <a href="/Login" class="btn_3">Signin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>New to our Shop? <br>
                                    Please Signup  now</h3>
                                <form class="row contact_form" action="/Register1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Name">
                                            <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email" value=""
                                            placeholder="Email">
                                            <span style="color:red" >@error('email') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="address" name="address" value=""
                                            placeholder="Address">
                                            <span style="color:red" >@error('address') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="pincode" name="pincode" value=""
                                            placeholder="Pincode">
                                            <span style="color:red" >@error('pincode') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                            <span style="color:red" >@error('password') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="cpassword" name="confirmpassword" value=""
                                            placeholder="ConfirmPassword">
                                            <span style="color:red" >@error('confirmpassword') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group">
                                       
                                        <button type="submit" value="register" class="btn_3">
                                            Register
                                        </button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection