<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Taekwondo Fighters </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        
        <!-- All css here -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('front/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
        <script src="{{asset('front/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>


    <body>
        <!-- Header Area Start -->
        <header class="fixed">
            <div class="header-area header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="logo">
                                <!-- <a href="index.html"><img src="img/logo/logo.png" alt="Judo" /></a> -->
                                Taekwondo Fighters
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-10 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Classes</a></li>
                                            <li><a href="#">Instructor</a></li>
                                            <li><a href="#">blog</a>
                                                <ul>
                                                    <li><a href="#">blog</a></li>
                                                    <li><a href="#">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
                        </div>
                        <div class="col-md-2 hidden-sm hidden-xs">
                            <div class="login-register text-center">
                                <ul>
                                    <li><a href="#">login</a></li>
                                    <li>|</li>
                                    <li><a href="#">register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->
        <!-- Background Area Start -->

        @section('body')
        @show
    
        <!-- Map Area Strat -->
        <!-- Footer Area Strat -->
        <div class="footer-area bg-dark">
            <div class="footer-main pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3>contact us</h3>
                                <div class="single-add fix pb-5">
                                    <div class="add-left">
                                        <h4>Address:</h4>
                                    </div>
                                    <div class="add-right">
                                        <p> Gurugram,<br>
                                        Haryana, India, 233555</p>
                                    </div>
                                </div>
                                <div class="single-add fix">
                                    <div class="add-left">
                                        <h4>Phone:</h4>
                                    </div>
                                    <div class="add-right">
                                        <p>+91 95 55 33 52 00<br>
                                        +91 95 55 50 16 34</p>
                                    </div>
                                </div>
                                <div class="single-add fix">
                                    <div class="add-left">
                                        <h4>Email:</h4>
                                    </div>
                                    <div class="add-right">
                                        <p>anandgurugramwala@gmail.com<br>
                                        support@taekwondofighters.info</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="footer-widget">
                            <h3>Quick Links</h3>

                        </div>
                        </div>  
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3>Subscribe</h3>
                           
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.tumblr.com/"><span class="ti-tumblr"></span></a></li>
                                        <li><a href="https://twitter.com/"><span class="ti-twitter"></span></a></li>
                                        <li><a href="https://www.pinterest.com"><span class="ti-pinterest"></span></a></li> 
                                        <li><a href="https://www.facebook.com"><span class="ti-facebook"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black pt-15 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <p class="text-left"><a href="#" target="_blank"></a> <i class="fa fa-copyright"></i> 2020 All Rights Reserved.</p>
                        </div>
<!--                         <div class="col-sm-6 col-xs-12">
    <p class="text-right">Terms of use and <a href="#">Privacy Policy</a></p>
</div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
       
        <!-- All js here -->
        <script src="{{asset('front/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('front/js/ajax-mail.js')}}"></script>             
        <script src="{{asset('front/js/jquery.nav.js')}}"></script> 
        <script src="{{asset('front/js/plugins.js')}}"></script>
   

        <script src="{{asset('front/js/main.js')}}"></script>
    </body>


</html>
