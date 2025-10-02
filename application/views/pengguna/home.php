<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>
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
					<!-- <strong><?= $user->username; ?></strong> -->
					<strong>Asep</strong>
				</div>
			</div>
			<div>
				<a href="<?= base_url('pengguna/logout') ?>"><i class="fa-solid fa-right-to-bracket fa-lg"></i></a>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="container">
		<div class="row text-center my-3">
			<div class="col-4">
				<a href="<?= base_url('') ?>" class="btn btn-outline-warning w-100 rounded-3">
					<i class="fa-solid fa-clock"></i><br>30 hari lagi
				</a>
			</div>

			<div class="col-4">
				<button class="btn btn-outline-warning w-100 rounded-3" disabled>
					<i class="fa-solid fa-signal"></i><br>10mbps
				</button>
			</div>

			<div class="col-4">
				<a href="<?= base_url('pengguna/bayar') ?>" class="btn btn-outline-warning w-100 rounded-3">
					<i class="fa-solid fa-plus"></i><br>Bayar
				</a>
			</div>

		</div>


		<!-- Official FnNett -->
		<div class="container my-4">
			<div class="row text-center g3">
				<div class="col-6">
					<a href="#"><button class="btn btn-outline-warning w-100">
							<i class="fa-solid fa-headset"></i><br>Call Customer Service
						</button>
					</a>
				</div>
				<br>
				<div class="col-6">
					<a href="https://twitter.com/aiuiaoblubub" target="_blank">
						<button class="btn btn-outline-warning w-100">
							<i class="fa-brands fa-x-twitter"></i><br>FnNett Official X
						</button>
					</a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-6">
					<a href="#"><button class="btn btn-outline-warning w-100">
							<i class="fa-solid fa-globe"></i><br>FnNett Official Website
						</button>
					</a>
				</div>
				<br>
				<div class="col-6">
					<a href="https://wa.me/085728370200" target="_blank">
						<button class="btn btn-outline-warning w-100">
							<i class="fa-brands fa-whatsapp"></i><br>FnNett Official Whatsapp
						</button>
					</a>
				</div>
			</div>
			<br>
		</div>

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

			<a href="<?= base_url('profile') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
				<i class="fa-solid fa-user-circle fa-lg"></i><br>Profile
			</a>
		</div>
	</nav>





	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
