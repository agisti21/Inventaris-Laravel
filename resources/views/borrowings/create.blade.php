@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('borrowings.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('borrowings.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam</strong>
                <br>
                <input  name="tgl_pinjam" class="date" autocomplete="off">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <br>
                <strong>Tanggal kembali</strong>
                <br>
                <input  name="tgl_kembali" class="date" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis </strong>
                <select class="form-control" name="nama_jenis" id="nama_jenis">
                @foreach($inventories as $inventory)
                <option value="{{$inventory->nama_jenis}}">{{$inventory->nama_jenis}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah</strong>
                <input type="number" name="jumlah" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman </strong>
                <select class="form-control" name="status_peminjaman" id="status_peminjaman">
                @foreach($statuses as $status)
                <option value="{{$status->status}}">{{$status->status}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pegawai</strong>
                <select class="form-control" name="nama_pegawai" id="nama_pegawai">
                @foreach($employees as $employee)
                <option value="{{$employee->nama_pegawai}}">{{$employee->nama_pegawai}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Buat</button>
        </div>
    </div>
    <link rel="stylesheet" href="{{ URL ::asset('css/jquery-ui.theme.css')}}" type="text/css" />
<script type="text/javascript" src="{{ URL ::asset('js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script type="text/css" src="{{ URL::asset('js/jquery.css') }}"></script>
  <script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
</form>
@endsection