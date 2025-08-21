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
</head>

<body class="bg-white">

	<!-- Logo -->
	<div class="container mt-3">
		<div class="text-start">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" style="max-width: 160px;">
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
					<strong><?= $user; ?></strong>
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
			<div class="col-3">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-plus"></i><br>Add
				</button>
			</div>
			<div class="col-3">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-download"></i><br>Receive
				</button>
			</div>
			<div class="col-3">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-hand-holding-dollar"></i><br>Loan
				</button>
			</div>
			<div class="col-3">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-wallet"></i><br>Topup
				</button>
			</div>
		</div>

		<!-- Transactions -->
		<div class="transactions mt-3">
			<div class="d-flex justify-content-between align-items-center mb-2">
				<h5 class="mb-0"><i class="fa-solid fa-list"></i> Transaction</h5>
				<a href="#" class="text-decoration-none small">See All</a>
			</div>

			<?php foreach ($transactions as $trx): ?>
				<div class="transaction-item d-flex justify-content-between align-items-center p-2 mb-2 bg-light rounded">
					<span><i class="fa-solid fa-user"></i> <?= $trx['name']; ?></span>
					<span class="text-success">+ Rp <?= number_format($trx['amount'], 0, ',', '.'); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
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
			<i class="fa-solid fa-user-circle"></i><br>Profil
		</a>

	</nav>



	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
