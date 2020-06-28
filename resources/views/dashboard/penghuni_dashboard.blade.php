@extends('layouts.master')

@section('content')
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

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    
    <div class="widget widget-account-invoice-one">

        <div class="widget-heading">
            <h5 class="">Account Info</h5>
        </div>

        <div class="widget-content">
            <div class="invoice-box">
                
                <div class="acc-total-info">
                    <h5>Balance</h5>
                    @foreach($saldo as $s)
                    <p class="acc-amount">Rp. {{ $s->nominal }}</p>
                    @endforeach
                </div>

                <div class="inv-action">
                    <a href="{{ url('login') }}" class="btn btn-danger">Top Up Hubungi Agen</a>
                </div>
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

<div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">Log Transaksi</h5>
        </div>

        <div class="widget-content">
            @foreach($log as $l)
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>{{ $l->untuk }}</h4>
                            <p class="meta-date">{{ $l->tanggal }}</p>
                            <p class="meta-date">{{ $l->user->name }}</p>
                        </div>
                    </div>
                    @if($l->jenis == 1)
                    <div class="t-rate rate-dec">
                    @elseif($l->jenis == 2)
                    <div class="t-rate rate-inc">
                    @elseif($l->jenis == 3)
                    <div class="t-rate">
                    @endif
                        <p>
                        @if($l->jenis == 1)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
                        @elseif($l->jenis == 2)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                        @elseif($l->jenis == 3)
                        @endif
                        <span>Rp. {{ $l->nominal }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
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