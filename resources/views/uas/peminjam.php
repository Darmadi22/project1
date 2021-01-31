@extends('uas')
@section('JUDULPAGE','LIST PEMINJAM')
@section('KONTEN')
<h3>Daftar Peminjam</h3>
<sup>Total Data:{{$PRek}}</sup>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID PEMINJAM/th>
      <th scope="col">NAMA PEMINJAM</th>
      <th scope="col">KODE BUKU</th>
      <th scope="col">TGL PINJAM</th>
    </tr>
  </thead>
  <tbody>
  @foreach($KData as $i=>$p)
    <tr>
      <th scope="row">1</th>
      <td>{{$p->id_peminjam}}</td>
      <td>{{$p->nama_peminjam}}</td>
      <td>{{$p->kode_buku}}</td>
      <td>{{$p->tgl_pinjam}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@stop