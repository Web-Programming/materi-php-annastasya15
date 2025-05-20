<!-- Detail Program Studi -->
<h2>Detail Program Studi</h2>

<table class="table">
    <tr>
        <th>ID Prodi</th>
        <td>{{ $prodi->id }}</td>
    </tr>
    <tr>
        <th>Nama Prodi</th>
        <td>{{ $prodi->nama }}</td>
    </tr>
    <tr>
        <th>Kode Prodi</th>
        <td>{{ $prodi->kode_prodi }}</td>
    </tr>
    <tr>
        <th>Tanggal Buat</th>
        <td>{{ $prodi->created_at }}</td>
    </tr>
    <tr>
        <th>Tanggal Update</th>
        <td>{{ $prodi->updated_at }}</td>
    </tr>
</table>
