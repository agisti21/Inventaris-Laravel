<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable =['nama_jenis','kondisi','keterangan','jumlah','tgl_regis','nama_ruang','nama_pegawai'];
}
