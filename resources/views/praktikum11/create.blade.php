@extends('praktikum11.prak1')
@section('JUDULPAGE','Penambahan Data Baru')
@section('KONTEN')
<h3>Penambahan Data Produk</h3>

<div class="container-fluid">
<form method="POST" action="{{route{'prak11'}}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" name="txProduk" class="form-control" id="txProduk" value="{{old{'txProduk'}}}">
    <small id="emailHelp" class="form-text text-muted">
    Isilah Nama Produk
    @if($errors->has('txProduk'))
      <spam class="badge badge-danger">
      {{$errors->first{'txProduk'}}}
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Beli</label>
    <input type="text" name="txHargabeli" class="form-control" id="txHargabeli" value="{{old{'txHargabeli'}}}>
    <small id="emailHelp" class="form-text text-muted">
    Isilah Harga beli Produk
    @if($errors->has('txHargabeli'))
      <spam class="badge badge-danger">
      {{$errors->first{'txHargabeli'}}}
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual</label>
    <input type="text" name="txHargajual" class="form-control" id="txHargajual"  value="{{old{'txHargajual'}}}>
    <small id="emailHelp" class="form-text text-muted">
    Isilah Harga Jual Produk
    @if($errors->has('txHargajual'))
      <spam class="badge badge-danger">
      {{$errors->first{'txHargajual'}}}
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Stok</label>
    <input type="text" name="txStok" class="form-control" id="txStok" value="{{old{'txStok'}}}>
    <small id="emailHelp" class="form-text text-muted">
    Isilah Stok Produk
    @if($errors->has('txStok'))
      <spam class="badge badge-danger">
      {{$errors->first{'txStok'}}}
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <Select name="text" name="txKat" class="form-control" id="txKat" value="{{old{'txKat'}}}>
    @foreach($DKat as $i->$k)
        <option value="{{$k->idkat">{{$k->kategori}}</option>
    @endforeach
    </select>
    <small id="emailHelp" class="form-text text-muted">
    Pilihlah Kategori Produk
    @if($errors->has('idkat'))
      <spam class="badge badge-danger">
      {{$errors->first{'idkat'}}}
    @endif
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop