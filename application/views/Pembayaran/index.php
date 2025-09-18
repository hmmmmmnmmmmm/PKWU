<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bayar Langganan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h4 class="mb-4 text-center">Bayar Langganan</h4>

    <form method="post" action="<?= site_url('pembayaran/proses'); ?>">
        <div class="mb-3">
            <label class="form-label">Payer Name</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Rekening</label>
            <input type="text" name="rekening" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Note</label>
            <textarea name="note" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Your Amount</label>
            <div class="input-group">
                <span class="input-group-text">IDR</span>
                <input type="number" name="jumlah" class="form-control text-end" placeholder="200000" required>
            </div>
        </div>
        <button type="submit" class="btn btn-warning w-100 mt-3">Bayar</button>
    </form>
</div>

</body>
</html>
