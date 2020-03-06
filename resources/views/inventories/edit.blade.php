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
  
    <form action="{{ route('inventories.update',$inventory->id) }}" method="POST">
    
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Nama jenis</strong>
                    <select class="form-control" name="nama_jenis" id="nama_jenis">
                    @foreach($types as $type)
                    <option value="{{$type->nama_jenis}}" @if($inventory->nama_jenis == $type->nama_jenis)selected 
                    @endif>{{$type->nama_jenis}}</option>
                    @endforeach
                </select>
                </div>
            </div>
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kondisi</strong>
                    <input type="text" name="kondisi" value="{{ $inventory->kondisi }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan</strong>
                    <input type="text" name="keterangan" value="{{ $inventory->keterangan }}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah</strong>
                    <input type="text" name="jumlah" value="{{ $inventory->jumlah }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Jenis</strong>
                    <select class="form-control" name="nama_jenis" id="nama_jenis">
                    @foreach($types as $type)
                    <option value="{{$type->nama_jenis}}" @if($inventory->nama_jenis == $type->nama_jenis)selected 
                    @endif>{{$type->nama_jenis}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal regis</strong>
                    <br>
                    <input type="text" name="tgl_regis" value="{{ $inventory->tgl_regis }}" class="date" autocomplete="off">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ruang</strong>
                    <select class="form-control" name="nama_ruang" id="nama_ruang">
                    @foreach($rooms as $room)
                    <option value="{{$room->nama_ruang}}" @if($inventory->nama_ruang == $room->nama_ruang)selected 
                    @endif>{{$room->nama_ruang}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama petugas</strong>
                    <select class="form-control" name="nama_pegawai" id="nama_pegawai">
                    @foreach($employees as $employee)
                    <option value="{{$employee->nama_pegawai}}" @if($inventory->nama_pegawai == $employee->nama_pegawai)selected 
                    @endif>{{$employee->nama_pegawai}}</option>
                    @endforeach
                </select>
                    </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
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