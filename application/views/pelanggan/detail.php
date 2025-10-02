<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Detail Pelanggan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	<style>
		body {
			background: #f8f9fa;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		.card {
			border-radius: 15px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
			padding: 30px;
		}

		.profile-icon {
			font-size: 100px;
			color: #6c757d;
		}

		.detail-item {
			display: flex;
			align-items: center;
			padding: 10px 0;
			border-bottom: 1px solid #eee;
		}

		.detail-item:last-child {
			border-bottom: none;
		}

		.detail-item i {
			font-size: 18px;
			width: 30px;
			text-align: center;
			color: #f58220;
		}

		.chat-btn {
			border: 1px solid #25d366;
			color: #25d366;
			border-radius: 30px;
			padding: 10px 20px;
			font-weight: 500;
			transition: all 0.3s;
		}

		.chat-btn:hover {
			background: #25d366;
			color: white;
		}

		footer {
			margin-top: 30px;
		}
	</style>
</head>

<body>
	<div class="container mt-4">

		<!-- Button Back -->
		<div class="mb-3 text-start">
			<a href="<?= site_url('pelanggan'); ?>" class="btn btn-outline-secondary btn-sm">
				<i class="fa fa-arrow-left"></i> Kembali
			</a>
		</div>

		<!-- Card -->
		<div class="card text-center">
			<h5 class="mb-4">Detail Pelanggan</h5>

			<!-- Icon User -->
			<div class="profile-icon mb-3">
				<i class="fa fa-user-circle"></i>
			</div>

			<!-- Nama -->
			<h6 class="fw-bold"><?= $pelanggan->nama ?></h6>
			<hr>

			<!-- Detail List -->
			<div class="text-start">
				<div class="detail-item">
					<i class="fa fa-user"></i>
					<span><?= $pelanggan->nama ?></span>
				</div>
				<div class="detail-item">
					<i class="fa fa-home"></i>
					<span><?= $pelanggan->alamat ?></span>
				</div>
				<div class="detail-item">
					<i class="fa fa-phone"></i>
					<span>0<?= $pelanggan->no_telp ?></span>
				</div>
				<div class="detail-item">
					<i class="fa fa-cogs"></i>
					<span><?= $pelanggan->layanan ?></span>
				</div>
			</div>

			<!-- Chat WA -->
			<div class="mt-4">
				<a href="https://wa.me/0<?= preg_replace('/[^0-9]/', '', $pelanggan->no_telp) ?>" target="_blank"
					class="btn chat-btn">
					<i class="fab fa-whatsapp"></i> Chat
				</a>
			</div>
		</div>

		<!-- Footer -->
		<footer class="text-center">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" height="40" class="mt-3">
		</footer>
	</div>
</body>

</html>
