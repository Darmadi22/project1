@extends('uas')
@section('JUDULPAGE','LIST BUKU PERPUSTAKAAN')
@section('KONTEN')
<h3>Daftar Buku</h3>
<sup>Total Data:{{$JRek}}</sup>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Jumlah Buku</th>
      <th scope="col"><a class="btn btn-success" href="{{route('uas.create')}}">Tambah Data</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach($KData as $i=>$p)
    <tr>
      <th scope="row">1</th>
      <td>{{$p->kode_buku}}</td>
      <td>{{$p->judul_buku}}</td>
      <td>{{$p->jumlah_buku}}</td>
      <td><a class="btn btn-outline-warning" href="{{route('uas.edit',$p ->id)}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop