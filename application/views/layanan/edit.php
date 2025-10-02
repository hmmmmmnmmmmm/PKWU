<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Layanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            background-color: #f8f9fa;
            padding: 30px;
        }

        .form-container {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            max-width: 500px;
            margin: auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-weight: 600;
            color: #F58220;
        }

        .btn-orange {
            background-color: #F58220;
            color: white;
            border-radius: 8px;
            transition: 0.2s ease-in-out;
        }

        .btn-orange:hover {
            background-color: #e07513;
            color: #fff;
        }

        label {
            font-weight: 500;
            margin-bottom: 6px;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2><i class="fa-solid fa-edit me-2"></i>Edit Layanan</h2>
        <form method="post" action="<?= site_url('layanan/update') ?>">
            <input type="hidden" name="id_layanan" value="<?= $layanan->id_layanan ?>">

            <div class="mb-3">
                <label for="nama_layanan">Nama Layanan</label>
                <input type="text" class="form-control" name="nama_layanan" id="nama_layanan" 
                       value="<?= $layanan->nama_layanan ?>" required>
            </div>

            <div class="mb-3">
                <label for="kecepatan">Kecepatan</label>
                <input type="text" class="form-control" name="kecepatan" id="kecepatan" 
                       value="<?= $layanan->kecepatan ?>" required>
            </div>

            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" 
                       value="<?= $layanan->harga ?>" required>
            </div>

            <div class="mb-3">
                <label for="kota">Kota</label>
                <select class="form-select" name="kota" id="kota" required>
                    <option value="">-- Pilih Kota --</option>
                    <option value="solo" <?= $layanan->kota == 'solo' ? 'selected' : '' ?>>Solo</option>
                    <option value="yogyakarta" <?= $layanan->kota == 'yogyakarta' ? 'selected' : '' ?>>Yogyakarta</option>
                    <option value="semarang" <?= $layanan->kota == 'semarang' ? 'selected' : '' ?>>Semarang</option>
                </select>
            </div>

            <button type="submit" class="btn btn-orange w-100">
                <i class="fa-solid fa-save me-1"></i> Update
            </button>
        </form>
    </div>

</body>
</html>
