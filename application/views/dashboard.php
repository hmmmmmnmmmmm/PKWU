<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wi-Fi Monitoring</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<style>
		.shimmer {
			animation: shimmer 1.5s infinite linear;
			background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
			background-size: 1000px 100%;
			border-radius: 4px;
		}

		.shimmer-line {
			height: 16px;
			margin-bottom: 8px;
			width: 100%;
		}

		@keyframes shimmer {
			0% {
				background-position: -1000px 0;
			}

			100% {
				background-position: 1000px 0;
			}
		}

		.badge-status {
			font-size: 11px;
			padding: 4px 6px;
			border-radius: 6px;
		}
	</style>

</head>

<body class="bg-white">

	<!-- Logo -->
	<div class="container mt-3">
		<div class="text-start">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" style="max-width: 130px;">
		</div>
	</div>

	<!-- Profile -->
	<div class="container mt-3">
		<div class="d-flex justify-content-between align-items-center px-3 py-2">
			<div class="d-flex align-items-center">
				<img src="<?= base_url('assets/images/profile.jpg'); ?>"
					alt="Profile"
					class="rounded-circle me-2"
					width="45" height="45">
				<div class="text-start">
					<p class="mb-0 text-muted">Welcome back,</p>
					<strong><?= $user->username; ?></strong>
				</div>
			</div>
			<div>
				<i class="fa-solid fa-right-to-bracket fa-lg"></i>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="container">
		<div class="row text-center my-3">
			<div class="col-4">
				<a href="<?= base_url('layanan') ?>"><button class="btn btn-outline-warning w-100">
						<i class="fa-solid fa-plus"></i><br>Tambah pilihan layanan
					</button></a>
			</div>
			<div class="col-4">
				<a href="<?= base_url('transaksi') ?>"><button class="btn btn-outline-warning w-100">
						<i class="fa-solid fa-download"></i><br>Recieve
					</button>
				</a>

			</div>
			<div class="col-4">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-hand-holding-dollar"></i><br>Loan
				</button>
			</div>
		</div>

		<!-- Transactions -->
		<div class="transactions mt-3">
			<div class="d-flex justify-content-between align-items-center mb-2">
				<h5 class="mb-0"><i class="fa-solid fa-list"></i> Transaction</h5>
				<a href="<?= base_url('transaksi') ?>" class="text-decoration-none small">See All</a>
			</div>

			<!-- Shimmer loading -->
			<div id="shimmer-loader">
				<?php for ($i = 0; $i < 3; $i++): ?>
					<div class="p-2 mb-2 bg-light rounded">
						<div class="shimmer shimmer-line w-50"></div>
						<div class="shimmer shimmer-line w-75"></div>
					</div>
				<?php endfor; ?>
			</div>

			<!-- Actual transactions -->
			<div id="transaction-list" class="d-none">
				<?php foreach ($transactions as $trx): ?>
					<?php
					$badgeClass = 'bg-secondary';
					if (isset($trx['status'])) {
						$badgeClass = match ($trx['status']) {
							'berhasil' => 'bg-success',
							'pending' => 'bg-warning text-dark',
							'gagal' => 'bg-danger',
							default => 'bg-secondary'
						};
					}

					$tanggal = isset($trx['created_at']) ? date('d M Y, H:i', strtotime($trx['created_at'])) : 'Belum ada waktu';
					$statusText = isset($trx['status']) ? ucfirst($trx['status']) : 'Unknown';
					?>
					<div class="transaction-item d-flex justify-content-between align-items-center p-2 mb-2 bg-light rounded">
						<div>
							<strong><i class="fa-solid fa-user"></i> <?= $trx['name']; ?></strong><br>
							<small><?= $tanggal ?></small><br>
							<span class="badge <?= $badgeClass ?> badge-status"><?= $statusText ?></span>
						</div>
						<span class="text-success fw-semibold">+ Rp <?= number_format($trx['amount'], 0, ',', '.') ?></span>
					</div>
				<?php endforeach; ?>

			</div>
		</div>

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

			<a href="<?= base_url('profil') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
				<i class="fa-solid fa-user-circle fa-lg"></i><br>Profil
			</a>
		</div>
	</nav>



	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Simulasi loading 1 detik
			setTimeout(function() {
				document.getElementById('shimmer-loader').classList.add('d-none');
				document.getElementById('transaction-list').classList.remove('d-none');
			}, 1000); // Ubah sesuai waktu loading real jika pakai AJAX nanti
		});
	</script>

</body>

</html>
