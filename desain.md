# Blueprint Arsitektur Desain Konseptual
## Mini Project 1: Product Information System

Dokumen ini menjabarkan rancangan konseptual arsitektur untuk sistem manajemen data informasi produk.

### 1. Data Layer (`products.php`)
- **Fungsi**: Bertindak sebagai pusat penyimpanan data statis.
- **Implementasi**: Menampung *multidimensional array* yang menyimpan data komoditas produk.
- **Atribut Data yang Disimpan**: ID, Nama, Kategori, Harga, Stok, dan Deskripsi.

### 2. Processing Layer (`functions.php`)
- **Fungsi**: Mengelola logika bisnis, pemrosesan, dan kalkulasi sistem.
- **Implementasi Utama**: 
  - Fungsi `hitungTotalNilaiStok()`: Bertugas untuk mengalkulasi total nilai aset gudang berdasarkan data stok dan harga.
  - *Logika Conditional*: Berfungsi untuk memberikan indikator visual (seperti menyaring warna baris tabel) jika stok suatu produk berada dalam status kritis (stok < 3).

### 3. Presentation Layer (`index.php`)
- **Fungsi**: Bertanggung jawab atas antarmuka (User Interface) dan penyajian data kepada pengguna.
- **Implementasi Utama**: 
  - Mengintegrasikan seluruh komponen sistem (Data dan Processing layer) menggunakan instruksi `require_once`.
  - Merender data produk ke dalam bentuk *layout* tabel HTML secara dinamis menggunakan perulangan `foreach`.