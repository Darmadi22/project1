<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produks;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Produks::create(['Kategori'=>"Keyboard",'Keterangan'=>"Segala macam keyboard PC, Laptop, TV"]);
        Produks::create(['Kategori'=>"Mouse",'Keterangan'=>"Segala macam mouse ware maupun wareless"]);
        Produks::create( ['Kategori'=>"Flashdisk",'Keterangan'=>"Segala macam merk, ukuran flashdisk"]);
    }
}
