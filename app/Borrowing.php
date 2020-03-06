<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table="borrowings";
    protected $fillable =['tgl_pinjam','tgl_kembali','nama_jenis','jumlah','status_peminjaman','nama_pegawai'];
}
