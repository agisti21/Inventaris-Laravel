@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('statuses.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                {{ $status->status }}
            </div>
        </div>
        
    <form action="{{ route('statuses.destroy',$status->id) }}" method="POST">
    <a class="btn btn-primary" href="{{ route('statuses.edit',$status->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
     </form>
@endsection