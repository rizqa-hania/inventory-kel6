<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('barang_id');
            $table->string('nama_barang');
            $table->string('merk');
            $table->integer('jumlah');
            $table->foreignId('ruang_id')->references('ruang_id')->on('ruang');
            $table->foreignId('jenis_id')->references('jenis_id')->on('jenis');
            $table->enum('status', ['baik', 'rusak ringan', 'rusak berat', 'dalam perbaikan', 'tidak digunakan']);
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
        Schema::dropIfExists('barang');
    }
}
