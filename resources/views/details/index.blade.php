
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('details.create') }}"> Create</a>
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
          
            
            <th>id inventoris</th>
            <th>Jumlah</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($details as $detail)
        <tr>
        
            <td>{{ $detail-> id_inventaris}}</td>
            <td>{{ $detail-> jumlah}}</td>
           
          
            <td>
                <form action="{{ route('details.destroy',$detail->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('details.show',$detail->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('details.edit',$detail->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection