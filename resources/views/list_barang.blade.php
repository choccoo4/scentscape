<div>
<<<<<<< HEAD
    <h1>List Barang</h1>
    <p>Kode Barang: {{$id}}</p>
    <p>Nama Barang: {{$nama}}</p>
=======
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id'] }}</td>
            <td>{{ $dataku['nama'] }}</td>
            <td>{{ $dataku['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    <!-- When there is no desire, all things are at peace. - Laozi -->
>>>>>>> main
</div>
