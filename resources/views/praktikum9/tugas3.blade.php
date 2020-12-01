<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <h2>Data Produk</h2>
        Jumlah Data: {{ $JRek}}

        <table border='1'>
            <thead>
                <tr>
                <th>No</th>
                <th>ID</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($PData as $i => $p)
                <tr>
                    <td>{{ $i + 1}}</td>
                    <td>{{ $p -> id}}</td>
                    <td>{{ $p -> Kategori}} </td>
                    <td>{{ $p -> Keterangan}} </td>
                </tr>
                @endforeach()
            </tbody>
    </body>
</html>