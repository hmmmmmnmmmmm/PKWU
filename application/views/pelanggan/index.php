<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Data Pelanggan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-white">
	<!-- Logo -->
	<div class="container mt-3">
		<div class="text-start">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" style="max-width: 130px;">
		</div>
	</div>

	<?= $this->session->flashdata('notifikasi'); ?>
	<div class="container mt-3">
		<!-- Header -->
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h5>Data Pelanggan</h5>
			<a href="<?= site_url('pelanggan/tambah'); ?>" class="btn btn-sm btn-warning">
				<i class="fa-solid fa-plus"></i> Tambah
			</a>
		</div>

		<!-- List Pelanggan -->
		<?php foreach ($pelanggan as $p): ?>
			<div class="d-flex justify-content-between align-items-center p-2 mb-2 bg-light rounded">
				<div>
					<i class="fa-solid fa-user-circle fa-lg me-2"></i>
					<strong><?= $p->nama; ?></strong><br>
					<small class="text-muted"><?= $p->alamat; ?></small>
				</div>
				<div>
					<a href="<?= site_url('pelanggan/detail/' . $p->id_pelanggan); ?>"
						class="btn btn-outline-primary btn-sm">Detail</a>
					<a href="<?= site_url('pelanggan/delete/' . $p->id_pelanggan); ?>"
						class="btn btn-outline-danger btn-sm"
						onclick="return confirm('Yakin ingin menghapus <?= $p->nama; ?>?');">
						Delete
					</a>
				</div>
			</div>

		<?php endforeach; ?>
	</div>

<!-- Bottom Navbar -->
<nav class="navbar fixed-bottom" id="bottom-navbar"
     style="background-color: #F58220; color: white;">

  <div class="d-flex w-100">
    <a href="<?= base_url('wifi') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
      <i class="fa-solid fa-house fa-lg"></i><br>Dashboard
    </a>

    <a href="<?= base_url('pelanggan') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
      <i class="fa-solid fa-users fa-lg"></i><br>Pengguna
    </a>

    <a href="<?= base_url('laporan') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
      <i class="fa-solid fa-chart-line fa-lg"></i><br>Laporan
    </a>

    <a href="<?= base_url('profile') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
      <i class="fa-solid fa-user-circle fa-lg"></i><br>Profile
    </a>
  </div>
</nav>


</body>

</html>
