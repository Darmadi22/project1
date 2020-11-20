<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Tugas7 extends Controller
{
    //
    public function index(){
        $produk = DB::table('produks')->get();
        return view('pertemuan7',compact('produk'));
    }
}
