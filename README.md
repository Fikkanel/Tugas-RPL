# 🎯 Tugas-RPL — Aplikasi CRUD PHP Native + Bootstrap

Proyek ini adalah aplikasi **CRUD (Create, Read, Update, Delete)** sederhana berbasis web menggunakan **PHP Native** dan **Bootstrap 5** untuk tampilan antarmuka.

---

## ✅ Fitur Aplikasi

- Tambah Data Barang 🟢
- Tampilkan Daftar Barang 📋
- Lihat Detail Barang 🔍
- Edit Data Barang ✏️
- Hapus Barang ❌
- Validasi Form Dasar ✅
- UI responsif dengan Bootstrap 💻📱

---
## 🚀 Cara Menjalankan Proyek

### 1. Clone Repositori
```bash
git clone https://github.com/Fikkanel/Tugas-RPL-PHP-Native.git
cd Tugas-RPL-PHP-Native
```
### 2. Siapkan Database
1. Buka phpMyAdmin
2. Buat database, misalnya: db_barang
3. Jalankan query SQL berikut:
```bash
CREATE TABLE barang (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(100) NOT NULL,
  harga INT NOT NULL,
  jumlah INT NOT NULL
);
```
### 3. Jalankan di Server lokal
Jika menggunakan XAMPP, salin folder proyek ke direktori htdocs, lalu akses di browser:
```bash
http://localhost/Tugas-RPL-PHP-Native/
```
---
### 🛠️ Teknologi yang Digunakan
- 🐘 PHP Native
- 🎨 Bootstrap 5
- 💾 MySQL (phpMyAdmin)
- 🌐 HTML5, CSS3

---
### 📌 Catatan
- Semua tampilan menggunakan komponen Bootstrap seperti form, table, dan tombol.
- Pastikan file db.php disesuaikan dengan konfigurasi server kamu.
- Validasi form sederhana dilakukan menggunakan HTML dan PHP.

---
### 🖼️ Preview Antarmuka
| Halaman   | Tampilan                                                             |
| --------- | -------------------------------------------------------------------- |
| Dashboard | ![Index Page](https://via.placeholder.com/300x150?text=Index+Page)   |
| Tambah    | ![Create Page](https://via.placeholder.com/300x150?text=Create+Page) |
| Detail    | ![Show Page](https://via.placeholder.com/300x150?text=Show+Page)     |


