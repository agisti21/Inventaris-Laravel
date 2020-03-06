
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pegawai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create</a>
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
          
            <th>nama pegawai</th>
            <th>nip</th>
            <th>alamat</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
        
            <td>{{ $employee-> nama_pegawai}}</td>
            <td>{{ $employee-> nip}}</td>
            <td>{{ $employee-> alamat}}</td>
          
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection