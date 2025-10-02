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
			transition: all 0.2s ease-in-out;
		}

		.card-layanan:hover {
			transform: translateY(-4px);
			box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
		}

		.btn-orange {
			background-color: #f7941e;
			color: white;
			border-radius: 10px;
		}

		.btn-orange:hover {
			background-color: #e07513;
			color: #fff;
		}

		body {
			background-color: #f8f9fa;
			padding-bottom: 120px;
		}

		@media (max-width: 576px) {
			body {
				padding-bottom: 140px;
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

	<div class="container mt-4">
		<h3 class="mb-4">Daftar Layanan</h3>

		<!-- Tombol kembali sesuai role -->
		<?php if ($this->session->userdata('role') == 'admin'): ?>
			<a href="<?= base_url('wifi') ?>" class="btn btn-secondary">
				<i class="fa fa-arrow-left"></i> Kembali
			</a>
		<?php else: ?>
			<a href="<?= base_url('pengguna') ?>" class="btn btn-secondary mb-3">
				<i class="fa fa-arrow-left"></i> Kembali
			</a>
		<?php endif; ?>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Layanan</th>
					<th>Harga</th>
					<th>Masa Aktif</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($layanan)) : ?>
					<?php $no = 1;
					foreach ($layanan as $l) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= htmlspecialchars($l->nama_layanan, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>Rp <?= number_format($l->harga, 0, ',', '.'); ?></td>
							<td><?= $l->kota; ?></td>
							<td><a href="<?= base_url('layanan/edit/' . $l->id_layanan) ?>" class="btn btn-sm btn-warning">
									<i class="fa fa-edit"></i> Edit
								</a>
								<a href="<?= base_url('layanan/hapus/' . $l->id_layanan) ?>"
									class="btn btn-sm btn-danger"
									onclick="return confirm('Yakin ingin menghapus layanan ini?')">
									<i class="fa fa-trash"></i> Hapus
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="4" class="text-center">Belum ada data layanan</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
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

	<!-- Auto padding to prevent overlap with navbar -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const navbar = document.querySelector(".bottom-navbar");
			if (navbar) {
				const navbarHeight = navbar.offsetHeight;
				document.body.style.paddingBottom = (navbarHeight + 30) + "px";
			}
		});
	</script>

</body>

</html>
