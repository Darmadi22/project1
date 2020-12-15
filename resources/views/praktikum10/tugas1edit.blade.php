<!DOCTYPE html>
<html>
    <head>
        <title>Edit Tabel Kategori</title>
    </head>
    <body>
        <h3>Edit Data Kategori ID:{{$eDT->idkat}}</h3>

        <form method="PUT" action="http://localhost:8000/prak10/{{$eDT->idkat}}">
            @csrf()
            @method("POST")
            <div class="txlabel">Kategori</div>
            <div class="inputext"><input type="text" name="txkat" value="{{$eDT->kategori}}"></div>
            <div class="txlabel">Keterangan</div>
            <div class="inputext"><input type="text" name="txdes" value="{{$eDT->keterangan}}"></div>
            <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value="Update data">
            </div>
        </form>
        <form method="post" action="http://localhost:8000/prak10/{{$eDT->idkat}}">
        @csrf()
        @method('DELETE')
        <div>
            <input type="submit" class="btn" name="btnkirim" value="Delete">
        </div>
        </form>
    </body>
</html>