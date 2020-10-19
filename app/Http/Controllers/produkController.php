<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class produkController extends Controller
{
    //properti indeks
    public function index(){
        $produk = "Sandal Swallow for Life";
        return view('produk/index', compact('produk'));
    }
    //property show
    public function showproduk(){
        $produk = ["Cyclops", "Wan Wan", "Terizla", "Zilong", "Atlas", "Guinevere"];
        return view('produk.showproduk', compact('produk'));
    }
}
