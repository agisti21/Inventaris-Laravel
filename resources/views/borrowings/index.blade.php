
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('borrowings.create') }}">+ Create</a>
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
           
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Jenis Barang</th>
            <th>Jumlah</th>
            <th>Status Pengembalian </th>
            <th>Nama Pegawai </th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($borrowings as $borrowing)
        <tr>
            <td>{{$borrowing -> tgl_pinjam}}</td>
            <td>{{$borrowing -> tgl_kembali}}</td>
            <td>{{$borrowing -> nama_jenis}}</td>
            <td>{{$borrowing -> jumlah}}</td>
            <td>{{$borrowing -> status_peminjaman}}</td>
            <td>{{$borrowing -> nama_pegawai}}</td>
          
            <td>
                <form action="{{ route('borrowings.destroy',$borrowing->id) }}" method="POST">
   
                   
                    <a class="btn btn-primary" href="{{ route('borrowings.edit',$borrowing->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
   
@endsection