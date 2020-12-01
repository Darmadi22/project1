<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Prak9Controller extends Controller
{
    //Menampilkan jumlah data
    public function QB_tugas1(){
        $JRekProduk = DB::table('produks')->count();
        $JRekKategori = DB::table('kategori')->count();
        
        return view('praktikum9.tugas1',compact('JRekProduk', 'JRekKategori'));
    }
    
    public function QB_tugas2(){
        $id = 2;
        $PData = DB::table('produks')   
            ->where('id',$id) 
            ->get();
        $JRek = DB::table('produks')   
        ->where('id',$id) 
        ->count();

        return view('praktikum9.tugas2' ,compact('id','PData','JRek'));
    }

    public function QB_tugas3(){
        $PData = DB::table('produks')
        ->join('kategori','kategori.id','produks.id')
        ->get();
        
        $JRek = DB::table('produks')
        ->join('kategori','kategori.id','produks.id')
        ->count();
        return view('praktikum9.tugas3', compact('JRek', 'PData'));
    }
}
