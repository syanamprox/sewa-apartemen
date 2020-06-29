@extends('master')

@section('content')

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
                                <i class="fa fa-building"></i>Tower {{ $u->tower->name }}
                            </div>
                            <div class="meta-bed-room">
                                <i class="fa fa-building"></i> Lantai {{ $u->lantai }}
                            </div>
                            <div class="meta-bed-room">
                                <i class="fa fa-building"></i> No. Unit {{ $u->no_unit }}
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
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.492360699479!2d112.76457641487596!3d-7.298446773771237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa53bc20b1a1%3A0xabd54bc4c61087af!2sUniversity%20of%2017%20Agustus%201945%20Surabaya!5e0!3m2!1sen!2sid!4v1592571586025!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.416849668667!2d112.74280731487596!3d-7.306977673866699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba0aacafef9%3A0x46fec75dce69e7aa!2sBalai%20RW%20III%20Kelurahan%20Bendul%20Merisi!5e0!3m2!1sen!2sid!4v1593409251408!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div><!-- /.mapl-left-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-address-book"></i>Alamat</h4>
                                    <p>Jl. Bendul Merisi Indah No. 3, Bendul Merisi, Wonocolo, Surabaya</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-envelope"></i>Email</h4>
                                    <p>info@syanampro.com</p>
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

@stop