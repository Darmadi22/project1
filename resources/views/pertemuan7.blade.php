<!DOCTYPE html>
<html>
    <head>
        <title>Pertemuan 7</title>
    </head>
    <body>
    <h3>Tugas 2</h3>
    <table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        </body>
        <tbody>
        @foreach($produk as $i=>$p)
        <tr>
            <td>{{$i+1}}</th>
            <td>{{$p->Kategori}}</td>
            <td>{{$p->Keterangan}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </body>
    </html>