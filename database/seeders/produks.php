<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class produks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        produks::create(
            [
                'nama_produk'=>"Flashdisk 4GB Kengshong",
                'Id_kat'=>"3",
                'qty'=>"200",
                'harga_jual'=>"60000",
                'harga_beli'=>"45000"],
            [
                'nama_produk'=>"Mouse Wireless Logitec",
                'Id_kat'=>"2",
                'qty'=>"230",
                'harga_jual'=>"75000",
                'harga_beli'=>"65000"
            ]
        );
    }
}

