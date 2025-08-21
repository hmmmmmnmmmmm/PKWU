<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
  <h4>Tambah Pelanggan</h4>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
		<label class="form-label">Alamat</label>
		<textarea name="alamat" class="form-control" required></textarea>
    </div>
	<div class="mb-3">
		<label class="form-label">Nomor Telfon</label>
		<input type="number" name="nomor" class="form-control" required>
	</div>
	<div class="mb-3">
	  <label class="form-label">Pilihan Layanan</label>
    <select name="layanan" id="layanan">
      <option value=""></option>
    </select>
	</div>
    <button type="submit" class="btn btn-warning">Simpan</button>
    <a href="<?= site_url('pelanggan'); ?>" class="btn btn-secondary">Batal</a>
  </form>
</div>

</body>
</html>
