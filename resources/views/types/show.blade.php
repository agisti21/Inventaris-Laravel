@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('types.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jenis</strong>
                {{ $type->nama_jenis }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>keterangan</strong>
                {{ $type->ket }}
            </div>
        </div>
        
    </div>
    <form action="{{ route('types.destroy',$type->id) }}" method="POST">
    
     </form>
@endsection