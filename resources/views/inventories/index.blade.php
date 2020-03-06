
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventories.create') }}">+ Create</a>
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
            <th>kondisi</th>
            <th>Keterangan </th>
            <th>Jumlah </th>
           
            <th>Tanggal regis </th>
            <th>Nama ruang  </th>
           
            <th>Nama Pegawai </th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($inventories as $inventory)
        <tr>
            <td>{{$inventory -> nama_jenis}}</td>
            <td>{{$inventory -> kondisi}}</td>
            <td>{{$inventory -> keterangan}}</td>
            <td>{{$inventory -> jumlah}}</td>
          
            <td>{{$inventory -> tgl_regis}}</td>
            <td>{{$inventory -> nama_ruang}}</td>
           
            <td>{{$inventory ->nama_pegawai}}</td>


            <td>
                <form action="{{ route('inventories.destroy',$inventory->id) }}" method="POST">
                    
                <a class="btn btn-primary" href="{{ route('inventories.edit',$inventory->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection