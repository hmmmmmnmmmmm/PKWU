<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul ?></title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<style>
	.logout-link i {
    color: #F58220 !important;
    transition: none;
	}
	.logout-link:hover i,
	.logout-link:active i,
	.logout-link:focus i {
		color: #F58220 !important; 
	}
	
</style>

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
					<strong><?php 
						if (is_object($user) && isset($user->nama)) {
							echo $user->nama; 
						} elseif (is_object($user) && isset($user->username)) {
							echo $user->username;
						} else {
							echo 'Guest';
						}
					?></strong>
				</div>
			</div>
			<div>
				<a href="<?= base_url('auth/logout')?>" class="logout-link">
					<i class="fa-solid fa-right-to-bracket fa-lg" ></i>
				</a>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="container">
		<div class="row text-center my-3">
			<div class="col-3">
			<a href="<?= base_url('transaksi')?>">
				<button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-plus"></i><br>Add
				</button>
			</a>
			</div>
			<div class="col-3">
				<a href="<?= base_url('transaksi') ?>"><button class="btn btn-outline-warning w-100">
					<i class="fa-solid fa-download"></i><br>Recieve
				</button>
					</a>
					
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

		<a href="<?= base_url('profile') ?>" class="text-center text-white text-decoration-none">
			<i class="fa-solid fa-user-circle"></i><br>Profile
		</a>

	</nav>



	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
