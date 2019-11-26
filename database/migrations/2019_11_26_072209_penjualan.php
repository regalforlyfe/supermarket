<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->bigIncrements('id_penjualan');
            $table->bigInteger('id_barang')->unsigned();
            $table->bigInteger('id_kasir')->unsigned();
            $table->integer('jumlah');
            $table->integer('total');

            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_kasir')->references('id_kasir')->on('kasir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
