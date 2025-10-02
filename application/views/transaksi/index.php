<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<title>Laporan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
			padding-bottom: 100px;
		}

		.card-summary {
			border-radius: 12px;
			padding: 20px;
			background: #fff;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
			margin-bottom: 20px;
		}

		.status-badge {
			padding: 4px 10px;
			border-radius: 12px;
			font-size: 13px;
			font-weight: 600;
		}

		.status-sudah {
			background: #e6f9ec;
			color: #1e9e4b;
			border: 1px solid #1e9e4b;
		}

		.status-belum {
			background: #fdeaea;
			color: #d93025;
			border: 1px solid #d93025;
		}
	</style>
</head>

<body>
	<div class="container mt-3">
		<!-- Header -->
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h5>Laporan</h5>
			<a href="<?= base_url('transaksi/cetak') ?>" class="btn btn-outline-secondary btn-sm">
				<i class="fa fa-print"></i>
			</a>
			<!-- <button class="btn btn-outline-secondary btn-sm">
				<i class="fa fa-print"></i>
			</button> -->
		</div>

		<!-- Ringkasan Total -->
		<div class="card-summary">
			<p class="mb-1 text-muted">Total Masuk</p>
			<h4 class="mb-0 text-primary">IDR <?= number_format($total, 0, ',', '.') ?></h4>
		</div>

		<!-- Daftar -->
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h6 class="mb-0" id="bulanSekarang"></h6>
			<a href="#" class="text-primary small">See All</a>
		</div>

		<!-- Daftar Laporan -->
		<?php if (!empty($laporan)): ?>
			<?php foreach ($laporan as $row): ?>
				<div class="d-flex align-items-center bg-white rounded p-2 mb-2 shadow-sm">
					<img src="<?= base_url('assets/images/profile.jpg'); ?>" class="rounded-circle me-3" width="40" height="40">
					<div class="flex-grow-1">
						<strong><?= $row->nama ?></strong><br>
						<small class="text-muted"><?= $row->alamat ?></small>
					</div>
					<?php if ($row->status == 'sudah'): ?>
						<span class="status-badge status-sudah">Sudah</span>
					<?php else: ?>
						<span class="status-badge status-belum">Belum</span>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p class="text-center">Belum ada data laporan.</p>
		<?php endif; ?>

		<!-- Daftar Transaksi -->
		<div id="transaction-list" class="mt-4">
			<h6 class="mb-2">Daftar Transaksi</h6>
			<?php if (!empty($transactions)): ?>
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
			<?php else: ?>
				<p class="text-center">Belum ada data transaksi.</p>
			<?php endif; ?>
		</div>
	</div>

	<!-- Bottom Navbar -->
	<nav class="navbar fixed-bottom" style="background-color: #F58220; color: white;">
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

<script>
	const namaBulan = [
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	];

	const sekarang = new Date();
	const bulan = namaBulan[sekarang.getMonth()];
	const tahun = sekarang.getFullYear();

	document.getElementById("bulanSekarang").textContent = `${bulan} ${tahun}`;
</script>

</html>
