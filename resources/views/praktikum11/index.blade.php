@extends('praktikum11.prak1')
@section('JUDULPAGE','Daftar Stok Produk')
@section('KONTEN')
<h3>Daftar Produk</h3>
<sup>Total Data:{{$JRek}}</sup>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Stok</th>
      <th scope="col"><a class="btn btn-success" href="{{route('prak11.create')}}">Tambah Data</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach($KData as $p)
    <tr>
      <th scope="row">1</th>
      <td>{{$p ?? ''->namaproduk}}</td>
      <td>{{$p ?? ''->id_kat}}</td>
      <td>{{$p ?? ''->harga_jual}}</td>
      <td>{{$p ?? ''->harga_beli}}</td>
      <td>{{$p ?? ''->qty}}</td>
      <td><a class="btn btn-outline-warning" href="{{route('prak11.edit',$p ->id)}}">Edit</a></td>
   

    </tr>

  </tbody>
</table>
@endforeach