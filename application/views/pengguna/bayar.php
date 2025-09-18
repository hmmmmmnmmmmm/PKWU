<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bayar Langganan</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      max-width: 420px;
      background-color: #fff;
      padding: 24px;
      border-radius: 16px;
      margin: 40px auto;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    }

    .form-control, .form-select {
      border: none;
      border-bottom: 1px solid #ddd;
      border-radius: 0;
      box-shadow: none !important;
    }

    .form-control:focus, .form-select:focus {
      border-color: #f7941e;
    }

    .input-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
    }

    .input-group-custom {
      position: relative;
    }

    .input-group-custom input, .input-group-custom textarea {
      padding-left: 36px;
    }

    .btn-orange {
      background-color: #f7941e;
      color: #fff;
      border-radius: 12px;
      font-weight: bold;
    }

    .btn-orange:hover {
      background-color: #e67e00;
    }

    .select2-container--default .select2-selection--single {
      height: 42px;
      border: none;
      border-bottom: 1px solid #ddd;
      border-radius: 0;
    }

    .select2-selection__rendered img {
      width: 24px;
      margin-right: 8px;
    }

    .select2-results__option img {
      width: 24px;
      margin-right: 8px;
    }

    .currency-input {
      font-size: 20px;
      font-weight: bold;
      text-align: right;
    }
  </style>
</head>
<body>

<div class="container">
  <h5 class="text-center mb-4">Bayar Langganan</h5>

  <form method="post" action="<?= site_url('pembayaran/proses'); ?>">

    <!-- Nama -->
    <div class="mb-3 input-group-custom">
      <label class="form-label">Payer Name</label>
      <i class="fa fa-user input-icon"></i>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" required>
    </div>

    <!-- Rekening -->
    <div class="mb-3 input-group-custom">
      <label class="form-label">Nomor Rekening</label>
      <i class="fa fa-envelope input-icon"></i>
      <input type="text" name="rekening" class="form-control" placeholder="Masukan Nomor Rekening Anda" required>
    </div>

    <!-- Note -->
    <div class="mb-3 input-group-custom">
      <label class="form-label">Note</label>
      <i class="fa fa-comment input-icon"></i>
      <textarea name="note" class="form-control" placeholder="Tambahkan catatan ketika perlu"></textarea>
    </div>

    <!-- Metode Rekening (Select2 + Logo) -->
    <div class="mb-3">
      <label class="form-label">Tipe Rekening</label>
      <select id="bankSelect" name="tipe" class="form-select" required>
        <option value="bca" data-img="<?= base_url('assets/images/bca.png'); ?>">BCA</option>
        <option value="bri" data-img="<?= base_url('assets/images/bri.png'); ?>">BRI</option>
        <option value="mandiri" data-img="<?= base_url('assets/images/mandiri.png'); ?>">Mandiri</option>
        <option value="bni" data-img="<?= base_url('assets/images/bni.png'); ?>">BNI</option>
        <option value="dana" data-img="<?= base_url('assets/images/dana.jpg'); ?>">Dana</option>
        <option value="bsi" data-img="<?= base_url('assets/images/bsi.png'); ?>">BSI</option>
      </select>
    </div>

    <!-- Jumlah Uang -->
    <div class="mb-3">
      <label class="form-label">Enter Your Amount</label>
      <input type="text" id="jumlah" name="jumlah" class="form-control currency-input" placeholder="Masukan jumlah uang" required>
    </div>

    <!-- Tombol -->
    <button type="submit" class="btn btn-orange w-100 mt-3">Bayar</button>
  </form>
</div>

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  // Format rupiah live
  document.getElementById('jumlah').addEventListener('input', function (e) {
    let value = e.target.value.replace(/[^,\d]/g, '').toString();
    let split = value.split(',');
    let sisa = split[0].length % 3;
    let rupiah = split[0].substr(0, sisa);
    let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
      let separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    e.target.value = rupiah;
  });

  // Select2 dengan logo
  function formatBank (bank) {
    if (!bank.id) return bank.text;
    var img = $(bank.element).data('img');
    if (!img) return bank.text;
    var $bank = $(`
      <span><img src="${img}" class="img-fluid" style="width:24px;"/> ${bank.text}</span>
    `);
    return $bank;
  };

  $('#bankSelect').select2({
    templateResult: formatBank,
    templateSelection: formatBank,
    minimumResultsForSearch: -1,
    width: '100%'
  });
</script>
</body>
</html>
