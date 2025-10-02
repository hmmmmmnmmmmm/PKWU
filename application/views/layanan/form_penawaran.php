<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<title>Atur Lokasi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f2f2f2;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			font-family: 'Segoe UI', sans-serif;
		}

		.card-popup {
			background: white;
			border-radius: 16px;
			padding: 24px;
			box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
			width: 90%;
			max-width: 400px;
		}

		.btn-orange {
			background-color: #f7941e;
			color: white;
			border-radius: 12px;
		}

		.btn-orange:hover {
			background-color: #e67e00;
		}

		.logo {
			max-width: 150px;
			margin: 0 auto 20px;
			display: block;
		}
	</style>
</head>

<body>

	<div class="card-popup text-center">
		<img src="<?= base_url('assets/images/logo.png'); ?>" class="logo" alt="Logo FN Network" />
		<h6 class="mb-2 fw-bold">Atur Lokasi Pemasangan dulu, ya!</h6>
		<p class="text-muted" style="font-size: 14px;">Tentukan lokasi Anda dan dapatkan penawaran terbaiknya</p>

		<!-- Pilih Kota -->
		<select id="kotaSelect" class="form-select mb-3">
			<option value="">Pilih Kota</option>
			<option value="solo">Solo</option>
			<option value="yogyakarta">Yogyakarta</option>
			<option value="semarang">Semarang</option>
		</select>

		<!-- Pilih Layanan (akan muncul setelah pilih kota) -->
		<div id="layananWrapper" class="d-none">
			<select id="layananSelect" class="form-select mb-3">
				<!-- Diisi secara dinamis -->
			</select>
		</div>

		<button class="btn btn-orange w-100" onclick="submitForm()">Lanjut</button>
	</div>

	<script>
		const layananData = {
			solo: [
				"Paket Hemat 20Mbps - Rp 150.000",
				"Paket Pro 50Mbps - Rp 250.000",
				"Paket Ultra 100Mbps - Rp 350.000"
			],
			yogyakarta: [
				"Paket Lite 10Mbps - Rp 100.000",
				"Paket Family 30Mbps - Rp 200.000"
			],
			semarang: [
				"Paket Starter 25Mbps - Rp 180.000",
				"Paket Premium 75Mbps - Rp 300.000"
			]
		};

		const kotaSelect = document.getElementById("kotaSelect");
		const layananSelect = document.getElementById("layananSelect");
		const layananWrapper = document.getElementById("layananWrapper");

		kotaSelect.addEventListener("change", function() {
			const selectedKota = this.value;

			// Reset layanan
			layananSelect.innerHTML = "";

			if (layananData[selectedKota]) {
				layananData[selectedKota].forEach(function(paket) {
					const option = document.createElement("option");
					option.value = paket;
					option.textContent = paket;
					layananSelect.appendChild(option);
				});
				layananWrapper.classList.remove("d-none");
			} else {
				layananWrapper.classList.add("d-none");
			}
		});

		function submitForm() {
			const kota = kotaSelect.value;

			if (!kota) {
				alert("Silakan pilih kota terlebih dahulu.");
				return;
			}

			// Redirect ke halaman layanan dengan parameter kota
			window.location.href = "<?= site_url('pilihan/index?kota=') ?>" + kota;
		}
	</script>

</body>

</html>
