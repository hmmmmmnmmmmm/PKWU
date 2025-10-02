<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 12px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 10px;
		}

		th,
		td {
			border: 1px solid #000;
			padding: 6px;
			text-align: left;
		}

		th {
			background-color: #f2f2f2;
		}

		@media print {
			.print-btn {
				display: none;
			}
		}
	</style>
</head>

<body>

	<h3 style="text-align:center;"><?= $title ?></h3>
	<p style="text-align:center; font-size: 11px;">
		Dicetak pada: <?= date('d-m-Y H:i') ?>
	</p>

	<button class="print-btn" onclick="window.print()" style="margin-bottom: 10px;">Print / Simpan PDF</button>

	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Rekening</th>
				<th>Note</th>
				<th>Tipe</th>
				<th>Jumlah</th>
				<th>status</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($transaksi as $row): ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= htmlspecialchars($row->nama) ?></td>
					<td><?= htmlspecialchars($row->rekening) ?></td>
					<td><?= htmlspecialchars($row->note) ?></td>
					<td><?= htmlspecialchars($row->tipe) ?></td>
					<td><?= htmlspecialchars($row->jumlah) ?></td>
					<td><?= htmlspecialchars($row->status) ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5" style="text-align:right;"><b>Total</b></td>
				<td colspan="2">
					IDR <?= number_format(array_sum(array_column($transaksi, 'jumlah')), 0, ',', '.') ?>
				</td>
			</tr>
		</tfoot>

	</table>
</body>

</html>
