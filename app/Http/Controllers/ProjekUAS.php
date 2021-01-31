<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perpustakaan;
use App\Models\peminjam;

class ProjekUAS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $KData = perpustakaan::get();
        $JRek = perpustakaan::count();

        return view('uas.index',compact('KData','JRek'));

        $PData = peminjam::get();
        $PRek = peminjam::count();

        return view('uas.index',compact('PData','PRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DPerpus = perpustakaan::get();
        return view ('uas.create',compact('DPerpus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aturan = [
            'txjudul'=>'required',
            'txkode'=>'required|numeric',
            'txHjumlah'=>'required|numeric'
        ];
        $msg = [
            'required'=>'wajib diisi',
            'required'=>'wajib diisi dengan angka',
        ];
        $this->validate($request,$aturan,$msg);
        //Menambahkan data
        perpustakaan::create([
            'kode_buku'=>$request->txkode,
            'judul_buku'=>$request->txjudul,
            'jumlah_buku'=>$request->txjumlah

        ]);
        return redreact()->route('uas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriteria = "%".id."%";
        $KData = perpustakaan::where('Judul Buku','like',$kriteria)->get();
        $JRek = perpustakaan::where('Judul Buku','like',$kriteria)->count();
        return view('uas.index',compact('KData','JRek'));

        $peminjaman = "%".id."%";
        $PData = peminjam::where('Kode Buku','like',$peminjaman)->get();
        $PRek = peminjam::where('Kode Buku','like',$peminjaman)->count();
        return view('uas.index',compact('PData','PRek'));
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
        $Edit = tabelsiswa::where('id',$id)->first();
        $DKat = tabelpilihan::get();

        return view('uas.edit',compact('Edit','DKat'));
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
        perpustakaan::where('id',$id)->update([

            'kode_buku'=>$request->txkode,
            'judul_buku'=>$request->txjudul,
            'jumlah_buku'=>$request->txjumlah
        ]);
        return redirect()->route('uas.index');
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
        perpustakaan::where('id',$id)->delete();
        return redirect()->route('uas.index');
    }
}
