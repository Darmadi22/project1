<!DOCTYPE html>
<html>
    <head>
        <title>Tambah data Tabel Kategori</title>
    </head>
    <body>
        <h3>Menambahkan Data Kategori</h3>

        <form method="POST" action="http://localhost:8000/prak10">
            @csrf()
            @method("POST")
            <div class="txlabel">Kategori</div>
            <div class="inputext"><input type="text" name="txkat">
        @if($errors->has("txkat"))
            <span>Isi dulu dong,Hey!</span>
        @endif
        </div>
            <div class="txlabel">Keterangan</div>
            <div class="inputext"><input type="text" name="txdes"></div>
          @if($errors->has("txdes"))
            <span>Isi dulu dong,Hey!</span>
           @endif
            <input type="submit" name="btnkirim" value="Buat Data">
        </form>
    </body>
</html>