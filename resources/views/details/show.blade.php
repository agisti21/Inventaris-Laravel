@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
    
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id inventaris</strong>
                {{ $detail->id_inventaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jumlah</strong>
                {{ $detail->jumlah }}
            </div>
        </div>
        
    </div>
    <form action="{{ route('details.destroy',$detail->id) }}" method="POST">
    
     </form>
@endsection