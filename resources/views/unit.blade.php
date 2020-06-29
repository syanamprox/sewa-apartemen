@extends('master')

@section('content')

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <h2 class="page-title">Unit</h2>
                    <p class="page-description">About Unit Apartemen</p>                 
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Unit</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== About Main Content ====== --> 
    <section class="about-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content-one border">
                                <h2 class="title">Rooms &amp; Apartments</h2>
                                <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                            </div><!-- /.Apartments-heading-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        @foreach($unit as $u)
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="apartments-content">
                                    <div class="image-content">
                                        <a href="{{ url('unit') }}"><img src="https://htmlguru.net/house-rent/assets/images/apartment/apartment-one.png" alt="apartment" /></a>
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
                                            <div>
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
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-main-content -->

@stop