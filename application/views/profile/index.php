<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	<style>
		.profile-header {
			display: flex;
			align-items: center;
			gap: 15px;
			margin-bottom: 20px;
		}

		.profile-header img {
			width: 60px;
			height: 60px;
			border-radius: 50%;
			object-fit: cover;
		}

		.menu-item {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 15px 10px;
			border-bottom: 1px solid #f0f0f0;
		}

		.menu-item i {
			font-size: 18px;
			margin-right: 15px;
			color: #555;
		}

		.menu-left {
			display: flex;
			align-items: center;
		}

		.badge-notif {
			background: red;
			color: #fff;
			font-size: 12px;
			border-radius: 50%;
			padding: 4px 7px;
			margin-left: 8px;
		}
	</style>
</head>

<body class="bg-white">

	<div class="container mt-4">

		<!-- Header -->
		<div class="position-relative text-center mb-3">
			<a href="<?= base_url($this->session->userdata('role') == 'admin' ? 'Wifi' : 'Pengguna'); ?>"
				class="position-absolute top-0 start-0">
				<button class="btn btn-light"><i class="fa fa-arrow-left"></i></button>
			</a>

			<h5 class="m-0"><?= $judul ?></h5>
			<a href="<?= base_url('profile/edit') ?>" class="position-absolute top-0 end-0">
				<button class="btn btn-light"><i class="fa fa-pen"></i></button>
			</a>
		</div>


		<!-- Profile Info -->
		<div class="profile-header">
			<img src="<?= base_url('assets/images/profile.jpg'); ?>" alt="Profile">
			<div>
				<h6 class="m-0"><?= isset($user->nama) ? $user->nama : 'Guest'; ?></h6>
			</div>
		</div>

		<!-- Menu List -->
		<div class="list-menu">
			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-user"></i> Personal Information</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-wallet"></i> Payment Preferences</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-credit-card"></i> Banks and Cards</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left">
					<i class="fa fa-bell"></i> Notifications
					<span class="badge-notif">2</span>
				</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-envelope"></i> Message Center</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-location-dot"></i> Address</div>
				<i class="fa fa-chevron-right"></i>
			</div>

			<div class="menu-item">
				<div class="menu-left"><i class="fa fa-gear"></i> Settings</div>
				<i class="fa fa-chevron-right"></i>
			</div>
		</div>
	</div>

</body>

</html>
