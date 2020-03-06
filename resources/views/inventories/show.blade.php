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
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                {{ $inventory->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi</strong>
                {{ $inventory->kondisi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                {{ $inventory->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah</strong>
                {{ $inventory->jumlah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id jenis</strong>
                {{ $inventory->id_jenis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal regis</strong>
                {{ $inventory->tgl_regis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id ruang </strong>
                {{ $inventory->id_ruang }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id petugas </strong>
                {{ $inventory->id_petugas }}
            </div>
        </div>
   
@endsection