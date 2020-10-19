<!DOCTYPE html>
<html>
    <head>
    <title>Latihan view 4</title>
    </head>
    <body>
        @if(count($produk)==1)
            <p>Jumlah data tersimpan adalah satu</p>
        @elseif(count($produk)>1)
            <p>Jumlah data banyak ya bund</p>

            @for($i=0;$i<count($produk);$i++)
                <p>No : {{$i}}; Nama Produk: {{$produk[$i]}}</p>

            @endfor
        @else
            <p>Tidak ada data tersimpan</p>
        @endif
    </body>
</html>