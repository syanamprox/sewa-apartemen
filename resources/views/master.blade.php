
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>{{ $title }}</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="https://htmlguru.net/house-rent/assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="https://htmlguru.net/house-rent/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://htmlguru.net/house-rent/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://htmlguru.net/house-rent/images/apple-touch-icon-114x114.png">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">  
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://htmlguru.net/house-rent/assets/css/plugins.css">
    <link rel="stylesheet" href="https://htmlguru.net/house-rent/assets/css/colors.css">
    <link rel="stylesheet" href="https://htmlguru.net/house-rent/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @media screen and (min-width: 600px) {
            .kecil {
                display:none !important;
            }
        }
    </style>

    <!-- Modernizr
    ================================================== -->
    <script src="https://htmlguru.net/house-rent/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- ====== Header Mobile Area ====== -->
<header class="mobile-header-area bg-gray-color hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <!--Mobile Main Menu-->
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div><!--/.menuexpandermain-->
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - 0857 0667 9500</a>
                                            </li>
                                            @if (Route::has('login'))
                                                @auth
                                                <li>
                                                    <a href="#" class="cd-signin"><i class="fa fa-user"></i>{{ Auth::user()->name }}</a>
                                                </li>
                                                @endauth
                                            @endif
                                        </ul>
                                    </div><!-- /.left-content -->
                                </div>
                            </div><!--/#mobile-main-nav-->
                        </div><!--/.mobile-menu-main-->
                    </div><!-- /.menu-area -->
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="{{ url('') }}">
                                <img src="https://htmlguru.net/house-rent/assets/images/footer-logo.png" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.logo-area -->
                    <!-- /.search-block -->
                    <!-- /.additional-content -->
                </div><!-- /.mobile-header-block -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.mobile-header-area --> 

<!-- ====== Header Top Area ====== -->
<header class="header-area bg-gray-color style-two hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="social-media">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="https://instagram.com/syanampropqrstuvwxyz"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://syanampro.com"><i class="fa fa-heart"></i></a></li>
                            <li><a href="https://facebook.com/syanampro"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/syanampro"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div><!-- /.social-media -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="left-content">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - 0857 0667 95000</a> <!-- pc -->
                            </li>
                            @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('login') }}">{{ Auth::user()->name }}</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ url('login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('register') }}">Register</a>
                                </li>
                                @endauth
                            @endif
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.head-top-area -->
</header>

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content style-two hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="site-logo">
                    <a href="{{ url('') }}">
                        <img src="https://htmlguru.net/house-rent/assets/images/footer-logo.png" alt="house" />
                    </a>
                </div><!-- /.house-logo -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-9 col-sm-9">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="{{ url('') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ url('unit') }}">Unit</a>
                                </li>
                                <li>
                                    <a href="{{ url('team') }}">Our Team</a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a class="kecil" href="{{ route('logout') }}">Logout</a>
                                </li>
                                @else
                                <li>
                                    <a class="kecil" href="{{ url('login') }}">Login</a>
                                </li>
                                <li>
                                    <a class="kecil" href="{{ url('register') }}">Register</a>
                                </li>
                                @endauth
                            @endif
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper --> 
                </nav><!-- /.site-navigation --> 
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-area -->

<!-- ====== Header Overlay Content ====== -->
<div class="header-overlay-content">
    <!-- overlay-menu-item -->
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>
        <nav>
            <ul class="overlay-menu">
                @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ url('login') }}">{{ Auth::user()->name }}</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ url('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('register') }}">Register</a>
                    </li>
                    @endauth
                @endif
            </ul>
        </nav>
    </div> <!-- /.overlay-menu-item -->

    <!-- header-search-content -->
    <div class="gradient-transparent overlay-search">
        <button type="button" class="overlay-close">Close</button>
        <div class="header-search-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="get" class="searchform">
                            <div class="input-group" id="adv-search">
                                <input type="text" class="form-controller" placeholder="Search for snippets" />
                                <div class="input-group-btn">
                                    <div class="btn-group" role="group">
                                        <div class="dropdown dropdown-lg">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <div class="form-horizontal">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> From Blog</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox">Find Your Apartment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fa fa-search" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.header-search-content -->  

</div><!-- /.header-overlay-content -->

    @yield('content')

    <!-- ====== Footer Area ====== --> 
    <footer class="footer-area" style="background-image:url(https://htmlguru.net/house-rent/assets/images/footer-bg.png)">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="widget widget_about yellow-color">    
                       <div class="widget-title-area">
                           <h3 class="widget-title">
                               Tentang House Rent
                           </h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="widget-about-content">
                           <img src="https://htmlguru.net/house-rent/assets/images/footer-logo.png" alt="house" />
                           <p>Kami menyediakan tempat persewaan apartemen terbaik di kota kota besar di jawa timur.</p>
                           <a href="https://syanampro.com" class="button">More</a>
                       </div><!-- /.widget-content -->
                   </div><!-- /.widget widget_about -->
               </div><!-- /.col-md-4 -->
               <div class="col-md-4">
                   <div class="widget widget_place_category yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Kota Kami</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <ul>
                           <li>Flat for Rent <a href="#">Surabaya</a></li>
                           <li>Flat for Rent <a href="#">Sidoarjo</a></li>
                           <li>Flat for Rent <a href="#">Malang</a></li>
                           <li>Flat for Rent <a href="#">Gresik</a></li>
                           <li>Flat for Rent <a href="#">Mojokerto</a></li>
                       </ul> 
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
               <div class="col-md-4">
                   <div class="widget widget_instagram yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Instagram</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="instagram-image-content">
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-one.png" alt="" /></a>
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-two.png" alt="" /></a>
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-three.png" alt="" /></a>
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-four.png" alt="" /></a>
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-five.png" alt="" /></a>
                           <a href="#"><img src="https://htmlguru.net/house-rent/assets/images/instagram/instagram-six.png" alt="" /></a>

                       </div><!-- /.instagram-image-content -->
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
           <div class="row">
               <div class="col-md-12">
                   <div class="bottom-content">
                       <p>Copyright  &copy;2020 <a href="https://syanampro.com">Syaiful Anam</a></p>
                   </div><!-- /.bottom-top-content -->
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </footer><!-- /.footer-area -->

    <!-- All The JS Files
    ================================================== --> 
    <script src="https://htmlguru.net/house-rent/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://htmlguru.net/house-rent/assets/js/plugins.js"></script>
    <script src="https://htmlguru.net/house-rent/assets/js/main.js"></script> <!-- main-js -->
</body>
</html>