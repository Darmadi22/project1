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
        Schema::create('tb_perpustakaan', function(Blueprint $TB){
            $TB->increments('Kode Buku');
            $TB->string('Judul Buku',100);
            $TB->string('Jumlah Buku',10);
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
