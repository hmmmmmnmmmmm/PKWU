<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Riwayat Transaksi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      padding-bottom: 100px;
      background-color: #f8f9fa;
    }

    .toast-container {
      z-index: 1055;
    }

    .card-transaksi {
      transition: box-shadow 0.2s ease;
    }

    .card-transaksi:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5><i class="fa fa-history"></i> Riwayat Transaksi</h5>
      <a href="<?= site_url('transaksi'); ?>" class="btn btn-sm btn-outline-secondary">
        <i class="fa fa-rotate-right"></i>
      </a>
    </div>

    <?php if (!empty($transaksi)): ?>
      <?php foreach ($transaksi as $t): ?>
        <?php
          $badgeClass = match ($t->status) {
            'berhasil' => 'bg-success',
            'pending'  => 'bg-warning text-dark',
            'gagal'    => 'bg-danger',
            default    => 'bg-secondary'
          };
        ?>
        <div class="d-flex align-items-center p-2 mb-2 bg-white rounded shadow-sm card-transaksi">
          <img src="<?= base_url('assets/images/profile.jpg'); ?>" alt="User" class="rounded-circle me-3" width="40" height="40">
          <div class="flex-grow-1">
            <strong><?= $t->nama; ?></strong><br>
            <small class="badge <?= $badgeClass ?>"><?= ucfirst($t->status); ?></small><br>
            <small class="text-muted"><?= $t->note ?: 'Tidak ada catatan' ?></small><br>
            <small class="text-muted">Rp <?= number_format($t->jumlah, 0, ',', '.') ?> - via <?= strtoupper($t->tipe) ?></small>
          </div>

          <?php if ($t->status === 'pending'): ?>
            <form action="<?= site_url('transaksi/setujui/' . $t->id) ?>" method="post" class="ms-3">
              <button class="btn btn-sm btn-success">Setujui</button>
            </form>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center">Belum ada transaksi pembayaran.</p>
    <?php endif; ?>
  </div>

  <!-- Toast Notifikasi -->
  <?php if ($this->session->flashdata('success')): ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div class="toast show align-items-center text-white bg-success border-0" role="alert">
        <div class="d-flex">
          <div class="toast-body">
            <?= $this->session->flashdata('success'); ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- Bottom Navbar -->
  <nav class="navbar fixed-bottom" id="bottom-navbar" style="background-color: #F58220; color: white;">
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
      <a href="<?= base_url('profil') ?>" class="nav-item flex-fill text-center text-white text-decoration-none py-2">
        <i class="fa-solid fa-user-circle fa-lg"></i><br>Profil
      </a>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Auto padding bottom sesuai navbar -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const navbar = document.getElementById("bottom-navbar");
      const body = document.body;
      if (navbar) {
        const height = navbar.offsetHeight + 20;
        body.style.paddingBottom = height + 'px';
      }
    });
  </script>

</body>

</html>
