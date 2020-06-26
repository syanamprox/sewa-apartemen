@extends('layouts.master')

@section('content')

<!--  BEGIN CONTENT AREA  -->

<!-- Add Modal -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tower</h5>
            </div>
            <div class="modal-body">
                <form action="{{ action('TowerController@store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div> 
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                    </div> 
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Tower</h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('master/tower') }}" method="post" enctype="multipart/form-data" id="editForm">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div> 
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" name="description" >
                    </div> 
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="image" name="image">
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
                <form action="{{ url('master/tower') }}" method="post" id="deleteForm">
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
                    <h4>Master Tower</h4>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tower as $twr)
                        <tr>
                            <td>{{ $twr->name }}</td>
                            <td>{{ $twr->description }}</td>
                            <td>{{ $twr->getImage() }}</td>
                            <td class="text-center">
                                <div class="dropdown custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <a href="{{ url('/master/tower/'.$twr->_id) }}" class="dropdown-item">Show</a> 
                                        <button type="button" class="dropdown-item edit" data-toggle="modal" data-target="#editData" data-id="{{ $twr->_id }}" data-name="{{ $twr->name }}" data-desc="{{ $twr->description }}" data-image="{{ $twr->getImage() }}">Edit</button>
                                        <button type="button" class="dropdown-item delete" data-toggle="modal" data-target="#deleteData" data-id="{{ $twr->_id }}">Delete</button>
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
        var name = $(this).data('name'); $(".modal-body #name").val(name);
        var desc = $(this).data('desc'); $(".modal-body #description").val(desc);

        console.log(id);
        console.log(name);
        console.log(desc);

        $('#editForm').attr('action','/master/tower/'+id);
    });

    $(document).on('click', '.delete', function () {

    var id = $(this).data('id');

    console.log(id);

    $('#deleteForm').attr('action','/master/tower/'+id);
    });
});
</script>
@stop