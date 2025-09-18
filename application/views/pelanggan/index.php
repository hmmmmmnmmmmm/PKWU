<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body class="bg-white">

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
				<a href="<?= site_url('pelanggan/detail/' . $p->id_pelanggan); ?>" class="btn btn-outline-primary btn-sm">Detail</a>
			</div>
		<?php endforeach; ?>
	</div>

	<nav class="navbar fixed-bottom d-flex justify-content-around py-2"
		id="bottom-navbar"
		style="background-color: #F58220; color: white;">

		<a href="<?= base_url('wifi') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-house"></i><br>Dashboard
		</a>

		<a href="<?= base_url('pelanggan') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-users"></i><br>Pengguna
		</a>

		<a href="<?= base_url('laporan') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-chart-line"></i><br>Laporan
		</a>

		<a href="<?= base_url('profile') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-user-circle"></i><br>Profile
		</a>

	</nav>
</body>

</html>
