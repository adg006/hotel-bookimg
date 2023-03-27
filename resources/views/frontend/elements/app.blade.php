<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Home</title>        
		
        @include('frontend.elements.styles')
        
        <!-- All Javascripts -->
        <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/select2.full.js') }}"></script>
        <script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/acmeticker.js') }}"></script>
        <script src="{{ asset('frontend/js/moment.min.js') }}"></script>
        <script src="{{ asset('frontend/js/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/sticky_sidebar.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.meanmenu.js') }}"></script>

        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">111-222-3333</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            <li class="menu"><a href="cart.html">Cart</a></li>
                            <li class="menu"><a href="checkout.html">Checkout</a></li>
                            <li class="menu"><a href="signup.html">Sign Up</a></li>
                            <li class="menu"><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area" id="stickymenu">

            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{ asset('frontend/uploads/logo.png') }}" alt="">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('frontend/uploads/logo.png') }}" alt="">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">        
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Room & Suite</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Premium Suite</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="photo-gallery.html" class="nav-link">Photo Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="video-gallery.html" class="nav-link">Video Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        @yield('main');



        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Site Links</h2>
                            <ul class="useful-links">
                                <li><a href="rooms.html">Rooms & Suites</a></li>
                                <li><a href="photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Useful Links</h2>
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="terms.html">Terms and Conditions</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="disclaimer.html">Disclaimer</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="right">
                                    34 Antiger Lane,<br>
                                    PK Lane, USA, 12937
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-volume-control-phone"></i>
                                </div>
                                <div class="right">
                                    contact@arefindev.com
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="right">
                                    122-222-1212
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>
                                In order to get the latest news and other great items, please subscribe us here: 
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            Copyright 2022, ArefinDev. All Rights Reserved.
        </div>
     
        <div class="scroll-top">
            <i class="fa fa-angle-up"></i>
        </div>
		
        <script src="js/custom.js"></script>        
		
   </body>
</html>