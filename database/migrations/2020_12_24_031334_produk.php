<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Table Produks
        Schema::create('produks', function(Blueprint $TB){
            $TB->increments('id');
            $TB->string('nama_produk',100);
            $TB->integer('Id_kat');
            $TB->integer('qty');
            $TB->integer('harga_jual');
            $TB->integer('harga_beli');
            $TB->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('produks');
    }
}
