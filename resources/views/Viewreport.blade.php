<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Next Gen | Mobile Accessories | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


</head>

<body>

    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/AHome"><img src="../assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="/AHome">Home</a></li>
                                    
                                    
                                   
                                    <li><a href="#">Action</a>    
                                        <ul class="submenu">
                                            <li><a href="/ACategory">Add Category</a></li>
                                            <li><a href="/ABrand">Add Brand</a></li>
                                            <li><a href="/AItem2">Add Item</a></li>
                                        </ul>
                                    </li>
                                    

                                    <li><a href="#">View</a>    
                                        <ul class="submenu">
                                            <li><a href="/viewreport">View Report's</a></li>
                                            <li><a href="/viewcust">View Customer's</a></li>
                                            <li><a href="/viewitem">View Item's</a></li>
                                            <li><a href="/viewcat">View Category</a></li>
                                            <li><a href="/viewbrand">View Brand</a></li>
                                            <li><a href="/Afeedback">View FeedBack's</a></li>
                                        </ul>
                                    </li>
                                    

                                    <li><a href="/logout">Logout</a></li>
                                    {{-- <form class="d-flex" method="POST" action="">
                                        <input class="form-control me-2" type="date" placeholder="DATE" aria-label="Search">
                                        <button class="btn btn-success" type="submit">Search</button>
                                      </form> --}}
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            
                            <ul>
                                
                                
                                {{-- <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li> --}}
                                <li> <a href="/sessiondelete"><span class="flaticon-user"></span></a></li>
                                
                            </ul>
                        </div>
                    </div>

<div class="container">

<div class="row">
    <form class="d-flex" action="report" method="POST">
        {{ csrf_field() }}
        <input style="width: 170px;margin-left:400px" class="form-control me-2" type="date" placeholder="Search" aria-label="Search" name="date1">
        <input style="width: 170px"class="form-control me-2" type="date" placeholder="Search" aria-label="Search" name="date2">
       <br> <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      


    <div class="col-lg-12">
        <br> <br><table id="chacko" class="table ">
            {{-- <form action="report" method="POST">
                <input type="date" name="date1" class="form-control">
                <input type="date" name="date2" class="form-control">
                <button class="btn btn-primary">Search</button>
                </form> --}}
            <tr>
                <th>ORDER-ID</th>
                <th>CUSTOMER-NAME</th>
                <th>PRODUCT-NAME</th>
                <th>QUANTITY</th>
                <th>PRICE </th>
                <th>TOTAL</th>
                <th>DATE</th>
            </tr>
            @foreach($item as $i)
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->customer->name }}</td>
                <td>{{ $i->order->iname }}</td>
                <td>{{ $i->oqty }}</td>
                <td>{{ $i->oprice }}</td>
                <td>{{ $i->ototal }}</td>
                <td>{{ $i->odate }}</td>
               
                {{-- <td><a class="btn btn-warning" href={{"/edititem/".$i->id}}>EDIT</a></td>
                <td><a class="btn btn-danger"  href={{"/deleteitem/".$i->id}}>DELETE</a></td> --}}
            
            </tr>
            
            @endforeach
            </table>
            
            {{-- <button style=" margin-left:800px; background-color:black; padding: 20px 32px;" style="margin-left:800px;" class="btn btn-danger" id="pdf">Download</button> --}}
    </div>


</div>


</div>

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="../assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Choose Perfect Style, The perfect style exists in perfect websites, find your choice</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Screen Protectors</a></li>
                                <li><a href="#">Color Cases</a></li>
                                <li><a href="#"> Silicon Cases</a></li>
                                <li><a href="#"> Rubber Cases</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                 <!-- Footer bottom -->
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>               
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->



                    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript" src="../src/jquery-3.3.1.slim.min.js"></script>

<script type="text/javascript" src="../src/jspdf.min.js"></script>

<script type="text/javascript" src="../src/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="../src/tableHTMLExport.js"></script>

<script type="text/javascript">
  
  $("#json").on("click",function(){
    $("#chacko").tableHTMLExport({
      type:'json',
      filename:'reportdetails.json'
    });
  });

  $("#amal").on("click",function(){
    $("#chacko").tableHTMLExport({
      type:'pdf',
      filename:'reportdetails.pdf'
    });
  });

  $("#csv").on("click",function(){
    $("#chacko").tableHTMLExport({
      type:'csv',
      filename:'reportdetails.csv'
    });
  });

</script>

</body>
</html>

