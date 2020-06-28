@extends('layouts.master')

@section('content')

<!--  BEGIN CONTENT AREA  -->

<!-- Add Modal -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tipe</h5>
            </div>
            <div class="modal-body">
                <form action="{{ action('UnitController@store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" value="{{ old('kota') }}">
                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tower</label>
                        <select class="form-control @error('tower_id') is-invalid @enderror" id="tower_id" name="tower_id">
                            <option value="">Pilih Tower</option>
                            @foreach ($tower as $twr)
                            <option value="{{ $twr->_id }}">{{ $twr->name }}</option>
                            @endforeach
                        </select>
                        @error('tower_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control @error('tipe_id') is-invalid @enderror" id="tipe_id" name="tipe_id">
                            <option value="">Pilih Tipe</option>
                            @foreach ($tipe as $tp)
                            <option value="{{ $tp->_id }}">{{ $tp->name }}</option>
                            @endforeach
                        </select>
                        @error('tipe_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" class="form-control @error('lantai') is-invalid @enderror" id="lantai" name="lantai" value="{{ old('lantai') }}">
                        @error('lantai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No Unit</label>
                        <input type="text" class="form-control @error('no_unit') is-invalid @enderror" id="no_unit" name="no_unit" value="{{ old('no_unit') }}">
                        @error('no_unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="">Pilih Status</option>
                            <option value="1">Tersewa</option>
                            <option value="0">Tersedia</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>
<!-- End Add Modal -->

<!-- Edit Modal -->
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Tipe </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('master/tipe') }}" method="post" id="editForm">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label>Tower</label>
                        <select class="form-control" id="tower_id" name="tower_id">
                            @foreach ($tower as $twr)
                            <option value="{{ $twr->_id }}">{{ $twr->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control" id="tipe_id" name="tipe_id">
                            @foreach ($tipe as $tp)
                            <option value="{{ $tp->_id }}">{{ $tp->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" class="form-control" id="lantai" name="lantai">
                    </div> 
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label>No Unit</label>
                        <input type="text" class="form-control" id="no_unit" name="no_unit">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Tersewa</option>
                            <option value="0">Tersedia</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>
<!-- End Edit Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Tower</h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('master/unit') }}" method="post" id="deleteForm">
                    @method('DELETE')
                    @csrf
                    Anda Yakin Mau Menghapus Data Ini? 
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
                </form>
        </div>
    </div>
</div>
<!-- End Delete Modal -->

<div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Master Unit Apartemen</h4>
                    <button type="button" class="btn btn-primary center ml-3 text-white-90" data-toggle="modal" data-target="#addData">
                        Tambah Data
                    </button>
                </div>          
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                
                <table class="table table-bordered table-hover mb-4" id="myTable">
                    <thead>
                        <tr>
                        `   <th>Judul</th>
                            <th>Kota</th>
                            <th>Tower</th>
                            <th>Lantai</th>
                            <th>No Unit</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($unit as $tp)
                        <tr>
                            <td>{{ $tp->judul }}</td>
                            <td>{{ $tp->kota }}</td>
                            <td>{{ $tp->tower->name }}</td>
                            <td>{{ $tp->lantai }}</td>
                            <td>{{ $tp->no_unit }}</td>
                            <td>{{ $tp->tipe->name }}</td>
                            <td>@if ( $tp->status == '1' ) <?= '<span class="badge outline-badge-danger shadow-none">Tersewa</span>'?> @else <?= '<span class="badge outline-badge-info shadow-none">Tersedia</span>'?> @endif</td>
                            <td>Rp. {{ $tp->harga }}</td>
                            <td class="text-center">
                                <div class="dropdown custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <button type="button" class="dropdown-item edit" data-toggle="modal" data-target="#editData" data-id="{{ $tp->_id }}" data-tower="{{ $tp->tower_id}}" data-tipe="{{ $tp->tipe_id }}" data-lantai="{{ $tp->lantai }}" data-harga="{{ $tp->harga }}" data-nounit="{{ $tp->no_unit }}" data-status="{{ $tp->status }}">Edit</button>
                                        <button type="button" class="dropdown-item delete" data-toggle="modal" data-target="#deleteData" data-id="{{ $tp->_id }}">Delete</button>
                                    </div>
                                </div>
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
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/forms/theme-checkbox-radio.css') }}">
<link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('templates/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('footer')
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script>
$(document).ready( function () {
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    $('#myTable').DataTable();

    $(document).on('click', '.edit', function () {

        var id = $(this).data('id');
        var tower = $(this).data('tower'); $(".modal-body #tower_id").val(tower);
        var tipe = $(this).data('tipe'); $(".modal-body #tipe_id").val(tipe);
        var lantai = $(this).data('lantai'); $(".modal-body #lantai").val(lantai);
        var harga = $(this).data('harga'); $(".modal-body #harga").val(harga);
        var no_unit = $(this).data('nounit'); $(".modal-body #no_unit").val(no_unit);
        var status = $(this).data('status'); $(".modal-body #status").val(status);

        console.log(id);

        $('#editForm').attr('action','/master/unit/'+id);
    });

    $(document).on('click', '.delete', function () {

    var id = $(this).data('id');

    console.log(id);

    $('#deleteForm').attr('action','/master/unit/'+id);
    });
});
</script>
@stop