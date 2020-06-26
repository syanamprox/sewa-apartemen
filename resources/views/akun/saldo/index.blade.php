@extends('layouts.master')

@section('content')

<!--  BEGIN CONTENT AREA  -->

<!-- Edit Modal -->
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data User Saldo</h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('akun/saldo') }}" method="post" id="editForm">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label>User</label>
                        <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                            @foreach ($user as $pengguna)
                            <option value="{{ $pengguna->_id }}">{{ $pengguna->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" value="{{ old('nominal') }}">
                        <span>*Nominal lama akan ditambahkan dengan nominal baru</span>
                        @error('nominal')
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
<!-- End Edit Modal -->


<div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Saldo Pengguna</h4>
                </div>          
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                
                <table class="table table-bordered table-hover mb-4" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:45%;">Name</th>
                            <th class="text-center" style="width:30%;">Jumlah Saldo</th>
                            <th class="text-center" style="width:25%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($saldo as $adm)
                        <tr>
                        <td>{{ $adm->user->name }}</td>
                            <td>Rp. {{ $adm->nominal }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary center ml-3 text-white-90 edit" data-toggle="modal" data-target="#editData" data-id="{{ $adm->_id }}" data-user="{{ $adm->user_id }}" data-nominal="{{ $adm->nominal }}">Top Up / Penyesuaian Saldo</button>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@stop

@section('footer')
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates/assets/js/scrollspyNav.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
$(document).ready( function () {
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    $('#myTable').DataTable();

    $(document).on('click', '.edit', function () {

        var id = $(this).data('id');
        var user = $(this).data('user'); $(".modal-body #user_id").val(user);
        var nominal = $(this).data('nominal'); $(".modal-body #nominal").val(nominal);

        console.log(id);
        console.log(name);

        $('#editForm').attr('action','/akun/saldo/'+id);
    });

});
</script>
@stop