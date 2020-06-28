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
	<title>Home</title>

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
                                                    @else
                                                    <li>
                                                        <a href="{{ url('login') }}" class="cd-signin"><i class="fa fa-address-book"></i>Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('register') }}" class="cd-signin"><i class="fa fa-address-book"></i>Register</a>
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
                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 0857 0667 9500</a>
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
                                        <a href="{{ url('') }}">Selamat Datang di  HOUSE RENT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Silahkan memilih apartemen masa depan Anda!</a>
                                    </li>
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

	<!-- ====== Main Slider Area================================== --> 
	<div class="main-slider-two default-template-gradient">
		<div class="container-fluid pd-zero">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">                    
                        <div class="row tb">
                            <div class="col-md-5 tb-cell">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">
                                    <img src="https://htmlguru.net/house-rent/assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7 tb-cell">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">                    
                        <div class="row tb">
                            <div class="col-md-5 tb-cell">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">
                                    <img src="https://htmlguru.net/house-rent/assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7 tb-cell">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">                    
                        <div class="row">
                            <div class="col-md-5">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">
                                    <img src="https://htmlguru.net/house-rent/assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
            </div><!-- .pogoSlider -->
		</div><!-- /.container-fluid -->
	</div><!-- /.main-slider -->
	
    <!-- ====== Apartments Area ====== --> 
    <div class="apartments-area bg-gray-color">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-content-one border">
                       <h2 class="title">Rooms &amp; Apartments</h2>
                       <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                   </div><!-- /.Apartments-heading-content -->
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
           <div class="row">
           @foreach($unit->slice(0,6) as $u)
               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="{{ url('') }}"><img src="https://htmlguru.net/house-rent/assets/images/apartment/apartment-one.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->
                   
                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="{{ url('') }}">{{ $u->judul }}</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   {{ $u->kota }}, Jawa Timur
                               </span> 
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> {{ $u->tipe->name }}
                               </div>
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> {{ $u->tower->name }}
                               </div>
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> Lantai {{ $u->lantai }}
                               </div>
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> No. {{ $u->no_unit }}
                               </div>
                               <div class="meta-bed-room">
                                   @if($u->status == 0)
                                   <div><span class="badge badge-success">Tersedia</span></div>
                                   @else
                                   <div><span class="badge badge-danger">Tidak Tersedia</span></div>
                                   @endif
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                    Rp. {{ $u->harga }} 
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->
            @endforeach
           </div><!-- /.row -->
           <!-- <a href=" {{ url('login') }} " class="button nevy-button">All Apartments</a> -->
       </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

    <!-- ====== Call To Action ======= --> 
    <div class="call-to-action default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Do you want to Rent ?</h3>
                        <h4>Call us and list your property here</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">0857 0667 9500<span>syanam.pro@gmail.com</span></a></h4>
                        <a href="https://wa.me/6285706679500" class="button">Contact us</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

    <!-- ====== Contact Area ====== --> 
    <div class="contact-area">
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-two available">
                            <h2 class="title">We Are Available<br/> For You 24/7</h2>
                            <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <!-- <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.492360699479!2d112.76457641487596!3d-7.298446773771237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa53bc20b1a1%3A0xabd54bc4c61087af!2sUniversity%20of%2017%20Agustus%201945%20Surabaya!5e0!3m2!1sen!2sid!4v1592571586025!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Alamat</h4>
                                        <p>Jl. Semolowaru No. 45, Menur Pumpungan, Sukolilo, Surabaya</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Email</h4>
                                        <p>info@syanampro.com houserent@syanampro.com</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Hubungi</h4>
                                        <p>+6231 12345678 <br/>0857 0667 9500</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="https://facebook.com/syanampro"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/syanampro"><i class="fa fa-twitter"></i></a>
                                            <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->


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