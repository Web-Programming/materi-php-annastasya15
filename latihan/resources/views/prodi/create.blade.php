<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" action="{{ url(path: 'post') }}">
  @csrf
  <div class="mb-3">
    <label>Nama Prodi</label>
    <input type="text" name="nama_prodi" class="form-control">
  </div>
  <div class="mb-3">
    <label>Kode Prodi</label>
    <input type="text" name="kode_prodi" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>              
</body>
</html>