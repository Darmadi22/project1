<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihan extends Controller
{
    public function index(){
        $produk = DB::table['produks']->get();
        return view('produk.pertemuan7',compact('produk'));
    }
}
