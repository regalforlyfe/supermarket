<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pasok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasok', function (Blueprint $table) {
            $table->bigIncrements('id_pasok');
            $table->bigInteger('id_distributor')->unsigned();
            $table->bigInteger('id_barang')->unsigned();
            $table->integer('jumlah');

            $table->timestamps();
            $table->foreign('id_distributor')->references('id_distributor')->on('distributor');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasok');
    }
}
