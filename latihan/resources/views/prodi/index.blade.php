<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Prodi</th>
      <th>Kode Prodi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($listprodi as $prodi)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $prodi->nama }}</td>
      <td>{{ $prodi->kode_prodi }}</td>
      <td>
        <a href="{{ url('prodi/'.$prodi->id.'/edit') }}">Edit</a>
        <form action="{{ url('prodi/'.$prodi->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-link">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>