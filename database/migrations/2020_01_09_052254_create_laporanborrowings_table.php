<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanborrowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanborrowings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('nama_jenis');
            $table->integer('jumlah');
            $table->string('status_peminjaman');
            $table->string('nama_pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporansborrowings');
    }
}
