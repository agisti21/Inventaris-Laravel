<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
           
            $table->bigIncrements('id_inventaris');
            $table->string('nama_jenis');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah');
          
            $table->string('tgl_regis');
            $table->string('ruang');
        
            $table->integer('id_petugas');
            
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
        Schema::dropIfExists('inventaris');
    }
}
