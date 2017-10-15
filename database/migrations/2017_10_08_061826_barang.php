<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbarangs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang',30);
            $table->integer('jumlah');
            $table->integer('harga');
            $table->string('tanggal_beli');
            $table->string('status');
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
         Schema::dropIfExists('tbarangs');
    }
}
