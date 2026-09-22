# Sistem Manajemen Produk (Stok Gudang)

## Deskripsi Proyek
Proyek ini adalah sistem manajemen produk berbasis web menggunakan PHP. Aplikasi ini mengimplementasikan arsitektur tiga lapis (Data Layer, Processing Layer, dan Presentation Layer) untuk memisahkan tanggung jawab kode dan mempermudah pemeliharaan.

## Fitur Utama
* **Manajemen Data Berbasis Array:** Data produk disimpan dalam bentuk array multidimensi.
* **Indikator Stok Kritis:** Produk dengan jumlah stok di bawah 3 akan otomatis disorot dengan warna merah sebagai penanda visual peringatan.
* **Kalkulasi Aset Dinamis:** Sistem secara otomatis menghitung dan menampilkan total nilai aset gudang (Harga × Stok) secara keseluruhan.

## Struktur Arsitektur
1. **`products.php` (Data Layer):** Bertanggung jawab hanya untuk menyimpan koleksi data produk.
2. **`function.php` (Processing Layer):** Mengelola logika bisnis, seperti kalkulasi aset dan aturan stok.
3. **`index.php` (Presentation Layer):** Mengintegrasikan data dan logika untuk merender tabel antarmuka pengguna (UI).

## Cara Menjalankan
1. Pastikan Anda memiliki *local server* (XAMPP/Laragon) yang sudah aktif.
2. Masukkan folder proyek ini ke dalam folder server (misal: folder `htdocs` untuk XAMPP).
3. Akses melalui browser di alamat: `http://localhost/Project_lidya/index.php`.

## Pembuat
**Lidya Wulan Cahya**
*Universitas Malikussaleh*