@extends('praktikum')
@section('JUDULPAGE','Edit Data ')
@section('KONTEN')
<h3>Edit Data Siswa</h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item " > <a href="{{route('prakuas.index')}}">Lomba Animasi</a></li>
<li class="breadcrumb-item active" aria-current="page"> Edit Data Lomba Animasi </li>
</ol>
</nav>

<h3>Edit Data Siswa</h3>


<div class="container">

<form method="POST" action="http://localhost:8000/prakuas/{{ $Edit->id }}">
        @csrf()
        @method('PUT')

        


        <div class="form-group">
        <label for="exampleInputEmail1">Id Siswa</label>
        <div class="inputext"><input type="text" name="txidsiswa" class="form-control" value="{{ $Edit->idsiswa }}"></div>




        <div class="form-group">
        <label for="exampleInputEmail1">Nama Siswa</label>
        <div class="inputext"><input type="text" name="txnamasiswa" class="form-control" value="{{ $Edit->namasiswa }}"></div>

        <div class="form-group">
        <label for="exampleInputEmail1">Pilihan Lomba</label>
          <select name="txpilihanlomba" class="form-control" id="txpilihanlomba">
          @foreach($DKat as $i=>$k)
          <option value="{{$k->id}}">{{$k->pilihanlomba_animasi}}</option>
          @endforeach
        </select>
        <small id="emailHelp" class="form-text text-muted">Pilihlah Lomba Animasi</small>
        </div>      


        <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Daftar</label>
        <div class="inputext"><input type="text" name="txtanggaldaftar" class="form-control" value="{{ $Edit->tanggaldaftar }}"></div>

        
        
        <div class="form-group">
        <label for="exampleInputEmail1">tanggal Lomba</label>
        <div class="inputext"><input type="text" name="txtanggallomba" class="form-control "value="{{ $Edit->tanggallomba }}"></div>



        <input type="submit" name="btnkirim" class="btn btn-primary" value="Update Data">

    </form>
    <form method="post" action="http://localhost:8000/prakuas/{{ $Edit->id }}">

        

        @csrf()
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Data</button>

        </div>
        </form>
      </form>

@stop