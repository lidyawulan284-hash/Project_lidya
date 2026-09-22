# Dokumentasi Desain (Sistem Manajemen Produk)

## Konsep Utama
Desain antarmuka difokuskan pada kejelasan data dan kemudahan pembacaan (*readability*). Memanfaatkan tata letak tabel yang bersih agar pengguna dapat langsung mendeteksi ketersediaan barang di gudang.

## Skema Warna (Color Palette)
Desain ini menerapkan indikator warna untuk memberikan peringatan visual kepada pengguna:
* **Latar Header Tabel:** `#f4f4f4` (Abu-abu terang) untuk memisahkan judul dengan data.
* **Latar Peringatan Kritis:** `#ffcccc` (Merah muda pucat) sebagai sorotan pada baris produk yang stoknya hampir habis.
* **Teks Peringatan Kritis:** `#cc0000` (Merah gelap) untuk teks status stok kritis agar kontras dan mudah terbaca.
* **Area Rangkuman Aset:** `#e9ecef` (Abu-abu kebiruan) untuk kotak *Total Nilai Aset*.

## Tipografi
* **Font Utama:** `Arial, sans-serif` (profesional dan standar web).
* **Ukuran Teks:** Teks standar pada tabel, dengan ukuran diperbesar menjadi `1.2em` khusus untuk tampilan Total Aset di bagian bawah.

## Struktur Tata Letak (Layout)
1. **Bagian Atas (Header):** Judul aplikasi rata tengah.
2. **Bagian Tengah (Data):** Menampilkan tabel yang berisi rincian (ID, Nama Produk, Harga, Stok, Status). 
3. **Bagian Bawah (Footer):** Modul rangkuman di sisi kanan bawah yang mengalkulasi keseluruhan nilai aset.