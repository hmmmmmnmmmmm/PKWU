<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
<style>
    .profile-header {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 20px;
    }
    .profile-header img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
    }
    .menu-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 10px;
      border-bottom: 1px solid #f0f0f0;
    }
    .menu-item i {
      font-size: 18px;
      margin-right: 15px;
      color: #555;
    }
    .menu-left {
      display: flex;
      align-items: center;
    }
    .badge-notif {
      background: red;
      color: #fff;
      font-size: 12px;
      border-radius: 50%;
      padding: 4px 7px;
      margin-left: 8px;
    }
  </style>
</head>
<body class="bg-white">
<div class="container mt-3">

  <!-- Header -->
  <div class="position-relative text-center mb-3">
  <h5 class="m-0"><?= $judul ?></h5>
  <a href="<?= base_url('profile/edit') ?>" class="position-absolute top-0 end-0">
    <button class="btn btn-light"><i class="fa fa-print"></i></button>
  </a>
	</div>


  <?php foreach ($laporan as $l): ?>
			<div class="d-flex justify-content-between align-items-center p-2 mb-2 bg-light rounded">
				<div>
					<i class="fa-solid fa-user-circle fa-lg me-2"></i>
					<strong><?= $l->nama; ?></strong><br>
					<small class="text-muted"><?= $l->status; ?></small>
				</div>
				<a href="<?= site_url('pelanggan/detail/' . $l->id); ?>" class="btn btn-outline-primary btn-sm">Detail</a>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Bottom Navbar -->
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
