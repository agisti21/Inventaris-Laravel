@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('levels.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
    
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>level</strong>
                {{ $level->level }}
            </div>
        </div>
        
    </div>
    <form action="{{ route('levels.destroy',$level->id) }}" method="POST">
    
     </form>
@endsection