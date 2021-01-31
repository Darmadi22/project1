@extends('uas')
@section('JUDULPAGE','Edit Data Perpustakaan')
@section('KONTEN')
<h3>Edit Data Perpustakaan</h3>

<div class="container">
<form method="POST" action="http://localhost:8000/uas/{{ $Edit->id }}">
        @csrf()
        @method('PUT')

        <div class="form-group">
        <label for="exampleInputEmail1">Kode Buku</label>
        <div class="inputext"><input type="text" name="txkode" class="form-control" value="{{ $Edit->kode_buku }}"></div>

        <div class="form-group">
        <label for="exampleInputEmail1">JUDUL BUKU</label>
        <div class="inputext"><input type="text" name="txjudul" class="form-control" value="{{ $Edit->judul_buku }}"></div>

        <div class="form-group">
        <label for="exampleInputEmail1">JUMLAH BUKU</label>
        <div class="inputext"><input type="text" name="txjumlah" class="form-control" value="{{ $Edit->jumlah_buku }}"></div>

        <div class="Tombol">
        <button type="submit" class="btn btn-primary">Edit Data</button>
        <form method="POST" action="http://localhost:8000/prak11/{{ $Edit->id }}">
        @csrf()
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Data</button>
        </div>
        </form>
      </form>

@stop