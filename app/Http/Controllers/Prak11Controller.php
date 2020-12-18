<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\produks;

class Prak11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan seluruh data tabel
        $KData = produks::get();
        $JRek = produks::count();

        return view('praktikum11.prak1.index',compact('KData','JRek'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menambahkan data baru
        $DKat = kategori::get();

        return view('praktikum11.prak1.create',compact('DKat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Membuat validasi
        $aturan = [
            'txProduk'=>'required',
            'txHargabeli'=>'required|numeric',
            'txHargajual'=>'required|numeric',
            'txStok'=>'required|numeric',
            'txKat'=>'required|numeric',
        ];
        $msg = [
            'required'=>'wajib diisi',
            'required'=>'wajib diisi dengan angka',
        ];
        $this->validate($request,$aturan,$msg);
        //Menambahkan data
        produks::create([
            'namaproduk'=>$request->txProduk,
            'harga_beli'=>$request->txHargabeli,
            'harga_jual'=>$request->txHargajual,
            'qty'=>$request->txStok,
            'id_kat'=>$request->txKat,

        ]);
        return redreact()->route('prakt11.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan data berdasarkan pencarian
        $kriteria = "%".id."%";
        $KData = produks::where('namaproduk','like',$kriteria)->get();
        $JRek = produks::where('namaproduk','like',$kriteria)->count();
        return view('praktikum11.prak1.index',compact('KData','JRek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
