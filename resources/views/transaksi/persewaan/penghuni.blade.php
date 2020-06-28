@extends('layouts.master')

@section('content')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="app-hamburger-container">
            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
        </div>
        <div class="doc-container">
            <div class="tab-title">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="search">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                            @foreach($persewaan as $psw)
                            <li class="nav-item">
                                <div class="nav-link list-actions" id="{{ $psw->_id }}" data-invoice-id="{{ $psw->no_pesanan }}">
                                    <div class="f-m-body">
                                        <div class="f-head">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>
                                        <div class="f-body">
                                            <p class="invoice-number">{{ $psw->no_pesanan }}</p>
                                            <p class="invoice-customer-name"><span>To:</span> {{ $psw->user->name }}</p>
                                            <p class="invoice-generated-date">Date: {{ $psw->tanggal }}</p>
                                            @if($psw->status == 0)
                                                <form action="{{ url('penghuni/persewaan/'.$psw->_id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="badge outline-badge-danger shadow-none bayar">Bayar</button>
                                                </form>
                                            @elseif($psw->status == 1)
                                                <span style="margin-bottom:5px;" class="badge outline-badge-success shadow-none">Lunas</span>
                                                <span class="badge outline-badge-primary shadow-none">Dalam Kontrak</span>
                                            @else
                                                <span style="margin-bottom:5px;" class="badge outline-badge-success shadow-none">Lunas</span>
                                                <span style="margin-bottom:5px;" class="badge outline-badge-success shadow-none">Selesai</span>
                                            @endif                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="invoice-container">
                <div class="invoice-inbox">

                    <div class="inv-not-selected">
                        <p>Open an invoice from the list.</p>
                    </div>

                    <div class="invoice-header-section">
                        <h4 class="inv-number"></h4>
                        <div class="invoice-action">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign" data-toggle="tooltip" data-placement="top" data-original-title="Bayar"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                        </div>
                    </div>
                    
                    <div id="ct" class="">
                    @foreach($persewaan as $psw)
                        <div class="{{ $psw->_id }}">
                            <div class="content-section  animated animatedFadeInUp fadeInUp">

                                <div class="row inv--head-section">

                                    <div class="col-sm-6 col-12">
                                        <h3 class="in-heading">PESANAN PERSEWAAN</h3>
                                    </div>
                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                        <div class="company-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                            <h5 class="inv-brand-name">House Rent</h5>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row inv--detail-section">

                                    <div class="col-sm-7 align-self-center">
                                        <p class="inv-to">Order to</p>
                                    </div>
                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                        <p class="inv-detail-title">From : House Rent Corp.</p>
                                    </div>
                                    
                                    <div class="col-sm-7 align-self-center">
                                        <p class="inv-customer-name">{{ $psw->user->name }}</p>
                                        <p class="inv-street-addr">{{ $psw->user->alamat }}</p>
                                        <p class="inv-email-address">{{ $psw->user->email }}</p>
                                    </div>
                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                        <p class="inv-list-number"><span class="inv-title">Order Number : </span> <span class="inv-number">{{ $psw->no_pesanan }}</span></p>
                                        <p class="inv-created-date"><span class="inv-title">Order Date : </span> <span class="inv-date">{{ $psw->tanggal }}</span></p>
                                        <!-- <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">{{ $psw->tanggal }}</span></p> -->
                                    </div>
                                </div>

                                <div class="row inv--product-table-section">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="">
                                                    <tr>
                                                        <th class="text-center">Tower</th>
                                                        <th class="text-center">Tipe</th>
                                                        <th class="text-center">Lantai</th>
                                                        <th class="text-center">No Unit</th>
                                                        <th class="text-center">Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($psw->detil as $detil)
                                                    <tr>
                                                        <td class="text-center">{{ $detil->unit->tower->name }}</td>
                                                        <td class="text-center">{{ $detil->unit->tipe->name }}</td>
                                                        <td class="text-center">{{ $detil->unit->lantai }}</td>
                                                        <td class="text-center">{{ $detil->unit->no_unit }}</td>
                                                        <td class="text-center harga">Rp. {{ $detil->harga }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                        <div class="inv--payment-info">
                                            <div class="row">
                                                <div class="col-sm-12 col-12">
                                                    <h6 class=" inv-title">Payment Info:</h6>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <p class=" inv-subtitle">Bank Name: </p>
                                                </div>
                                                <div class="col-sm-8 col-12">
                                                    <p class="">BCA</p>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <p class=" inv-subtitle">Acc Number : </p>
                                                </div>
                                                <div class="col-sm-8 col-12">
                                                    <p class="">3630056372</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                        <div class="inv--total-amounts text-sm-right">
                                            <div class="row">
                                                <div class="col-sm-8 col-7">
                                                    <p class="">Sub Total: </p>
                                                </div>
                                                <div class="col-sm-4 col-5">
                                                    <p class="">Rp. {{ $psw->total }}</p>
                                                </div>
                                                <div class="col-sm-8 col-7">
                                                    <p class="">Tax Amount: </p>
                                                </div>
                                                <div class="col-sm-4 col-5">
                                                    <p class="">0</p>
                                                </div>
                                                <div class="col-sm-8 col-7">
                                                    <p class=" discount-rate">Discount :</p>
                                                </div>
                                                <div class="col-sm-4 col-5">
                                                    <p class="">0</p>
                                                </div>
                                                <div class="col-sm-8 col-7 grand-total-title">
                                                    <h4 class="">Grand Total : </h4>
                                                </div>
                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                    <h4 class="">Rp. {{ $psw->total }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
                                    

@stop

@section('header')
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/forms/theme-checkbox-radio.css') }}">
<link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/apps/invoice.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('footer')
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('templates/assets/js/apps/invoice.js') }}"></script>
<script>
$(document).ready( function () {
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    $('#myTable').DataTable();

    $(document).on('click', '.bayarr', function () {

        var id = $(this).data('id');

        console.log(id);

        $('.bayar').attr('action','/transaksi/persewaan/'+id);
    });

    $(document).on('click', '.delete', function () {

        var id = $(this).data('id');

        console.log(id);

        $('#deleteForm').attr('action','/master/admin/'+id);
    });
});
</script>
@stop