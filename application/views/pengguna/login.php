<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<style>
		body {
			background: #fff;
			font-family: 'Poppins', sans-serif;
		}

		.login-container {
			max-width: 380px;
			margin: 50px auto;
			padding: 20px;
		}

		.form-control {
			border-radius: 12px;
		}

		.btn-login {
			background-color: #ff6b1a;
			color: #fff;
			border-radius: 25px;
			padding: 10px;
			font-weight: 600;
			margin-bottom: 50%;
		}

		.btn-login:hover {
			background-color: #e85c0f;
			color: #fff;
		}

		.logo {
			margin-top: 30px;
			text-align: center;
		}

		.logo img {
			width: 100px;
		}

		.small-text {
			margin-top: 15px;
			font-size: 14px;
			text-align: center;
		}

		.form-icon {
			position: absolute;
			left: 15px;
			top: 12px;
			color: #aaa;
		}

		.input-group .form-control {
			padding-left: 40px;
		}

		.input-with-icon {
			position: relative;
		}

		.input-with-icon input {
			padding-left: 40px;
			/* kasih jarak biar placeholder & teks tidak ketimpa */
		}

		.input-with-icon i {
			position: absolute;
			left: 10px;
			top: 50%;
			transform: translateY(-50%);
			color: #999;
		}
	</style>
</head>

<body>

	<div class="login-container">
		<h1 class="text-Left mb-4">Sign In</h1>

		<?php if ($this->session->flashdata('error')): ?>
			<div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
		<?php endif; ?>

		<form method="post" action="<?= site_url('pengguna/login'); ?>">
			<div class="mb-3 position-relative">
				<div class="form-group input-with-icon">
					<i class="fa fa-envelope"></i>
					<input type="text" class="form-control" name="nama" placeholder="Nama">
				</div>
			</div>
			<div class="mb-3 position-relative">
				<div class="form-group input-with-icon">
					<i class="fa fa-lock"></i>
					<input type="password" class="form-control" name="no_telp" placeholder="Nomor Telfon">
				</div>
			</div>
			<button type="submit" class="btn btn-login w-100">Sign In</button>
		</form>

		<div class="logo">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo">
		</div>
	</div>

</body>

</html>
