@extends('layouts.master')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="row widget-statistic">
        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $agen }}</p>
                    <h5 class="">Jumlah Agen</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $penghuni }}</p>
                    <h5 class="">Jumlah Penghuni</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $pelamar }}</p>
                    <h5 class="">Jumlah Pelamar</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="row widget-statistic">
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $tower }}</p>
                    <h5 class="">Jumlah Tower</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $apartemen }}</p>
                    <h5 class="">Jumlah apartemen</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $apartemen_tersedia }}</p>
                    <h5 class="">Apartemen Tersedia</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="w-value">{{ $apartemen_tersewa }}</p>
                    <h5 class="">Apartemen Tersewa</h5>
                </div>
                <div class="widget-content">
                    <div class="w-chart">
                        <div id="hybrid_followers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-two">

        <div class="widget-heading">
            <h5 class="">Persewaan Berlangsung</h5>
        </div>

        <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><div class="th-content">Customer</div></th>
                            <th><div class="th-content">Order No</div></th>
                            <th><div class="th-content th-heading">Price</div></th>
                            <th><div class="th-content">Status</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($persewaan as $psw)
                        <tr>
                            <td><div class="td-content customer-name"><img src="{{ asset('templates/assets/img/90x90.jpg') }}" alt="avatar">{{ $psw->user->name }}</div></td>
                            <td><div class="td-content product-brand">{{ $psw->no_pesanan }}</div></td>
                            <td><div class="td-content pricing"><span class="">Rp. {{ $psw->total }}</span></div></td>
                            <td>
                                @if($psw->status == 1)
                                <div class="td-content"><span class="badge outline-badge-success">Lunas</span></div>
                                @elseif($psw->status == 0)
                                <div class="td-content"><span class="badge outline-badge-danger">Belum Lunas</span></div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-two">

        <div class="widget-heading">
            <h5 class="">Persewaan Selesai</h5>
        </div>

        <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><div class="th-content">Customer</div></th>
                            <th><div class="th-content">Order No</div></th>
                            <th><div class="th-content th-heading">Price</div></th>
                            <th><div class="th-content">Status</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($persewaan_selesai as $psw)
                        <tr>
                            <td><div class="td-content customer-name"><img src="{{ asset('templates/assets/img/90x90.jpg') }}" alt="avatar">{{ $psw->user->name }}</div></td>
                            <td><div class="td-content product-brand">{{ $psw->no_pesanan }}</div></td>
                            <td><div class="td-content pricing"><span class="">Rp. {{ $psw->total }}</span></div></td>
                            <td>
                                <div class="td-content" style="margin-bottom:5px;"><span class="badge outline-badge-success">Lunas</span></div>
                                <div class="td-content"><span class="badge outline-badge-success">Selesai</span></div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('header')
<link href="{{ asset('templates/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('footer')
<script src="{{ asset('templates/assets/js/dashboard/dash_1.js') }}"></script>
@stop