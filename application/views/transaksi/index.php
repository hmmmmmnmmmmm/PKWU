<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Transaction History</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-light">

	<div class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h5><i class="fa fa-history"></i> Transaction History</h5>
			<a href="<?= site_url('transaksi'); ?>" class="btn btn-sm btn-outline-secondary"><i class="fa fa-rotate-right"></i></a>
		</div>

		<?php if (!empty($transaksi)): ?>
			<?php foreach ($transaksi as $t): ?>
				<div class="d-flex align-items-center p-2 mb-2 bg-white rounded shadow-sm">
					<img src="<?= base_url('assets/images/profile.jpg'); ?>" alt="User" class="rounded-circle me-3" width="40" height="40">
					<div class="flex-grow-1">
						<strong><?= $t->nama; ?></strong><br>
						<small><?= $t->status; ?></small><br>
						<small class="text-muted"><?= $t->deskripsi; ?></small>
					</div>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p class="text-center">Tidak ada transaksi.</p>
		<?php endif; ?>
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

		<a href="<?= base_url('profil') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-user-circle"></i><br>Profile
		</a>
	</nav>

</body>

</html>
