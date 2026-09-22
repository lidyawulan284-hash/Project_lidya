<?php
// Memanggil file data dan fungsi
require_once 'products.php';
require_once 'function.php';

$totalAsset = calculateTotalAsset($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; }
        /* Style untuk penanda stok kritis */
        .kritis { background-color: #ffcccc; color: #cc0000; font-weight: bold; }
        .summary { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 5px; font-weight: bold; font-size: 1.2em; text-align: right; }
    </style>
</head>
<body>
    <h1>Sistem Manajemen Produk (Stok Gudang)</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <?php $isKritis = isCriticalStock($product['stok']); ?>
                <!-- Menambahkan class 'kritis' jika stok < 3 -->
                <tr class="<?= $isKritis ? 'kritis' : '' ?>">
                    <td><?= $product['id'] ?></td>
                    <td><?= htmlspecialchars($product['nama']) ?></td>
                    <td><?= formatRupiah($product['harga']) ?></td>
                    <td><?= $product['stok'] ?></td>
                    <td><?= $isKritis ? 'Stok Kritis' : 'Aman' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="summary">
        Total Nilai Aset Gudang: <?= formatRupiah($totalAsset) ?>
    </div>
</body>
</html>