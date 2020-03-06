@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventories.index') }}"> Back</a>
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
   
<form action="{{ route('inventories.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>nama Jenis </strong>
                <select class="form-control" name="nama_jenis" id="nama_jenis">
                @foreach($types as $type)
                <option value="{{$type->nama_jenis}}">{{$type->nama_jenis}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi</strong>
                <input  name="kondisi" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input  name="keterangan" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah</strong>
                <input  name="jumlah" class="form-control">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal regis</strong>
                <br>
                <input  name="tgl_regis" class="date" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruang </strong>
                <select class="form-control" name="nama_ruang" id="nama_ruang">
                @foreach($rooms as $room)
                <option value="{{$room->nama_ruang}}">{{$room->nama_ruang}}</option>
                @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai </strong>
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