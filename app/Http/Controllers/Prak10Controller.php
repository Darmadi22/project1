<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class Prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan data dari tabel kategori
        $KData = kategori::get();
        $Jrek = kategori::count();

        return view ('praktikum10.tugas1', compact('KData', 'Jrek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mnampilkan form untuk menambahkan data
        return view('praktikum10.tugas1create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Manerima data dari form 
        $psn = [
            'required'=>'Field harus diisi',
        ];
        $this->validate($request,[
            'txkat'=>'required',
        ],$psn);
        
        kategori::create([
          
                'kategori'=> $request->txkat,
                'keterangan'=> $request->txdes,
  
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menampilkan form dan data yang hendak diubah
        $eDT = kategori::where('idkat',$id)->first();
        return view('praktikum10.tugas1edit',compact('eDT'));
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
        //PROSES MENAMBAHKAN DATA
        kategori::where('idkat',$id)->update([
          
            'kategori'=> $request->txkat,
            'keterangan'=> $request->txdes,

    ]);
    return redirect()->route('prak10.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Proses hapus data
        kategori::where('idkat',$id)->delete();
        return redirect()->route('prak10.index');
    }
}
