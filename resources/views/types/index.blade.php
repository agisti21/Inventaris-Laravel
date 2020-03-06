
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Create</a>
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
          
            <th>nama jenis </th>
           
            <th>keterangan </th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($types as $type)
        <tr>
        
            <td>{{ $type-> nama_jenis}}</td>
            
            <td>{{ $type-> ket}}</td>
          
            <td>
                <form action="{{ route('types.destroy',$type->id) }}" method="POST">
   

                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection