<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Table Produks
        Scema::create('produks', function(Blueprint $TB){
            $TB->increments(id);
            $TB->string('namaproduk');
            $TB->integer('id_kat');
            $TB->integer('qty');
            $TB->double('harga_jual');
            $TB->double('harga_beli');
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
