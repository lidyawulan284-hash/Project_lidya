
<?php
// Fungsi untuk mengecek apakah stok kritis (di bawah 3)
function isCriticalStock($stok) {
    return $stok < 3;
}

// Fungsi untuk menghitung total nilai aset gudang
function calculateTotalAsset($products) {
    $totalAsset = 0;
    foreach ($products as $product) {
        $totalAsset += ($product['harga'] * $product['stok']);
    }
    return $totalAsset;
}

// Fungsi untuk memformat angka menjadi mata uang Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>