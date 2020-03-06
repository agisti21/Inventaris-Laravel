
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Status</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('statuses.create') }}">+ Create</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
           
           
            <th>Status</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($statuses as $status)
        <tr>
           
            <td>{{$status -> status}}</td>
          
            <td>
                <form action="{{ route('statuses.destroy',$status->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('statuses.show',$status->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
   
@endsection