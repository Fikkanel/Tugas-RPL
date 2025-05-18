<?php
include 'db.php';

// Ambil data dari form (tanpa kode)
$nama = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$harga = (int)$_POST['harga_satuan'];
$jumlah = (int)$_POST['jumlah'];

// Upload file foto
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Cek apakah direktori uploads ada, jika tidak buat
if (!is_dir('uploads')) {
    mkdir('uploads', 0755, true);
}

// Beri nama unik pada foto supaya tidak bentrok
$ext = pathinfo($foto, PATHINFO_EXTENSION);
$nama_file_baru = uniqid() . '.' . $ext;

if (move_uploaded_file($tmp, "uploads/" . $nama_file_baru)) {
    // Siapkan statement insert tanpa kolom kode (auto increment)
    $stmt = $conn->prepare("INSERT INTO barang (nama_barang, deskripsi, harga_satuan, jumlah, foto) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $nama, $deskripsi, $harga, $jumlah, $nama_file_baru);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
} else {
    echo "Gagal upload foto!";
}
?>
