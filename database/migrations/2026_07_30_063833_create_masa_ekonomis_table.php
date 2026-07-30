<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasaEkonomisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masa_ekonomis', function (Blueprint $table) {
            $table->bigIncrements('masa_id');
            $table->foreignId('barang_id')->references('barang_id')->on('barang');
            $table->date('tanggal_pembelian');
            $table->decimal('harga_pembelian', 15,2);
            $table->integer('masa_pakai_pertahun');
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
        Schema::dropIfExists('masa_ekonomis');
    }
}
