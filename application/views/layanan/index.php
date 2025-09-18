<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<title>Pilihan Layanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
	<style>
		.card-layanan {
			border-radius: 12px;
			padding: 20px;
			margin-bottom: 16px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
		}

		.btn-orange {
			background-color: #f7941e;
			color: white;
			border-radius: 10px;
		}

		body {
			background-color: #f8f9fa;
			padding-bottom: 120px;
			/* Default padding bawah */
		}

		@media (max-width: 576px) {
			body {
				padding-bottom: 140px;
				/* Tambahan untuk mobile kecil */
			}
		}

		.bottom-navbar {
			background-color: #F58220;
			color: white;
		}

		.bottom-navbar a {
			color: white;
			font-size: 14px;
		}

		.bottom-navbar a:hover {
			background-color: #e07513;
		}

		.bottom-navbar i {
			display: block;
			font-size: 18px;
			margin-bottom: 4px;
		}
	</style>
</head>

<body>

	<div class="container py-4">
		<h4 class="mb-4">Pilih Layanan di Kota: <?= ucfirst($kota) ?></h4>

		<?php if (empty($layanan)): ?>
			<div class="alert alert-warning">Tidak ada layanan untuk kota ini.</div>
		<?php else: ?>
			<?php foreach ($layanan as $item): ?>
				<div class="card card-layanan">
					<h5><?= $item['nama'] ?></h5>
					<p class="text-muted">Kecepatan: <?= $item['kecepatan'] ?></p>
					<p><strong>Rp <?= number_format($item['harga'], 0, ',', '.') ?></strong></p>
					<a href="<?= site_url('pemasangan/form?paket=' . urlencode($item['nama']) . '&harga=' . $item['harga'] . '&kota=' . $kota) ?>" class="btn btn-orange">Pesan Sekarang</a>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<!-- Bottom Navbar -->
	<nav class="navbar fixed-bottom" id="bottom-navbar"
		style="background-color: #F58220; color: white;">

		<div class="d-flex w-100">
			<a href="<?= base_url('pengguna') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
				<i class="fa-solid fa-house fa-lg"></i><br>Dashboard
			</a>
			<a href="<?= base_url('pemasangan') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
				<i class="fa-solid fa-house-signal fa-lg"></i><br>Layanan
			</a>
			<a href="<?= base_url('profil') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
				<i class="fa-solid fa-user-circle fa-lg"></i><br>Profil
			</a>
		</div>
	</nav>

	<!-- Auto padding to prevent overlap with navbar -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const navbar = document.getElementById("bottom-navbar");
			if (navbar) {
				const navbarHeight = navbar.offsetHeight;
				document.body.style.paddingBottom = (navbarHeight + 30) + "px";
			}
		});
	</script>

</body>

</html>
