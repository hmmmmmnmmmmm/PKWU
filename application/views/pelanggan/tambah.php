<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container mt-4 p-3 bg-white rounded shadow-sm">
  <h4 class="mb-3"><i class="fa fa-user-plus"></i> Tambah Data Pelanggan</h4>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input type="text" name="nama" class="form-control" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
        <textarea name="alamat" class="form-control" required></textarea>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Nomor Telfon</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa fa-phone"></i></span>
        <input type="text" name="no_telp" class="form-control" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Layanan</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa fa-wifi"></i></span>
        <select name="layanan" class="form-select" required>
          <option value="165rb 25mbps">165rb 25mbps</option>
          <option value="110k 10mbps">110k 10mbps</option>
        </select>
      </div>
    </div>

    <button type="submit" class="btn btn-warning w-100" style="background-color: #F58220;">Tambah</button>
    <a href="<?= site_url('pelanggan'); ?>" class="btn btn-secondary w-100 mt-2">Batal</a>
  </form>
</div>

</body>
</html>
