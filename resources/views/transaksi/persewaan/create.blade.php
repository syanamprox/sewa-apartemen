@extends('layouts.master')

@section('content')

<div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Buat Transaksi Persewaan</h4>
                    <div class="widget-content widget-content-area">
                        <form action="{{ action('PersewaanController@store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>No Pesanan</label>
                                    <input type="text" class="form-control @error('no_pesanan') is-invalid @enderror" id="no_pesanan" name="no_pesanan" value="{{ $nomor }}" readonly="true">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Pembeli</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        <option value="">Pilih Pembeli</option>
                                        @foreach ($pembeli as $pmb)
                                        <option value="{{ $pmb->_id }}">{{ $pmb->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Agen</label>
                                    <input type="text" class="form-control @error('agen') is-invalid @enderror" id="agen" name="agen" value="{{ Auth::user()->name }}" readonly="true">
                                    @error('agen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Tanggal</label>
                                    <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-4" id="myTable">
                                        <thead>
                                            <tr>
                                                <th><center>Unit</center></th>
                                                <th><center>Harga</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="unit0">
                                                <th style="width:50%;">
                                                    <div class="form-group">
                                                        <select class="form-control @error('unit_id') is-invalid @enderror" id="unit_id" name="unit_id[]">
                                                            <option value="">Pilih Unit</option>   
                                                            @foreach ($unit as $unt)
                                                            <option value="{{ $unt->_id }}" data-harga="{{ $unt->harga }}">{{ $unt->tower->name }} - Lantai {{ $unt->lantai }} - No. Unit {{ $unt->no_unit }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('unit_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </th>
                                                <th style="width:23%;">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control text-right @error('harga') is-invalid @enderror harga" id="harga" name="harga[]" value="">
                                                    </div>
                                                    @error('harga')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </th>
                                            </tr>
                                            <tr id="unit1"></tr>
                                            <tr id="unit2"></tr>
                                            <tr id="unit3"></tr>
                                            <tr id="unit4"></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control text-center" value="TOTAL HARGA" readonly="true">
                                                    </div> 
                                                </th>
                                                <th>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control text-right" id="total" name="total" value="">
                                                    </div>
                                                </th>
                                            </tr> 
                                            <tr>
                                                <th>
                                                    <button class="btn btn-warning" id="add_row">+ Add Row</button>
                                                </th>
                                                <th>
                                                    <button class="btn btn-danger" id="delete_row">- Delete Row</button>
                                                </th>
                                            </tr>         
                                        </tfoot>
                                    </table>
                                </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form> 
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>

@stop

@section('header')
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/forms/theme-checkbox-radio.css') }}">
<link href="{{ asset('templates/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@stop

@section('footer')
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
$(document).ready( function () {
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    flatpickr(document.getElementById('tanggal'), {
        dateFormat: "d-m-Y",
    });

    $(document).on("change", ".harga", function() {
        var sum = 0;
        $(".harga").each(function(){
            sum += +$(this).val();
        });
        $("#total").val(sum);
    });

    let row_number = 1;

    $("#add_row").click(function(e){
        e.preventDefault();
        let new_row_number = row_number - 1;
        $("#unit" + row_number).html($("#unit" + new_row_number).html()).find("td.first-child");
        $("#myTable").append('');
        row_number++;
        console.log(row_number);
        if(row_number > 5){
            row_number = 5;
        }
    });

    $("#delete_row").click(function(e){
        e.preventDefault();
        if(row_number > 1){
            $("#unit" + (row_number - 1)).html('');
        }
        row_number--;
        console.log(row_number);
        if(row_number < 1){
            row_number = 1;
        }
    });

});
</script>
@stop