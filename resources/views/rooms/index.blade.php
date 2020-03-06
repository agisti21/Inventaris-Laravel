
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create</a>
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
          
            <th>nama ruang </th>
           
            <th>keterangan </th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
        
            <td>{{ $room-> nama_ruang}}</td>
         
            <td>{{ $room-> ket}}</td>
          
            <td>
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
   
                   
                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection