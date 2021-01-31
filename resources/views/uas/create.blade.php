@extends('uas')
@section('JUDULPAGE','Penambahan Data Baru')
@section('KONTEN')
<h3>Penambahan Data Perpustakaan</h3>

<div class="container-fluid">
<form method="POST" action="{{route('uas')}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Buku</label>
    <input type="text" name="txperpus" class="txperpus" id="txperpus" value="{{old('txperpus')}}">
    <small id="emailHelp" class="form-text text-muted">
    Isilah Nama Produk
    @if($errors->has('txperpus'))
      <spam class="badge badge-danger">
      {{$errors->first{'txperpus}}}
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Buku</label>
    <input type="text" name="txkode" class="form-control" id="txkode" value="----">
    <small id="emailHelp" class="form-text text-muted">
    Isilah Kode Buku

    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Buku</label>
    <input type="text" name="txjumlah" class="form-control" id="txjumlah"  value="----">
    <small id="emailHelp" class="form-text text-muted">
    Isilah Jumlah Buku

    </small>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop