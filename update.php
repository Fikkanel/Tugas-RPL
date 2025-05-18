<?php
include 'db.php';

$kode = $_POST['kode'];
$nama = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga_satuan'];
$jumlah = $_POST['jumlah'];

if ($_FILES['foto']['name']) {
    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$foto);
    $conn->query("UPDATE barang SET nama_barang='$nama', deskripsi='$deskripsi', harga_satuan='$harga', jumlah='$jumlah', foto='$foto' WHERE kode='$kode'");
} else {
    $conn->query("UPDATE barang SET nama_barang='$nama', deskripsi='$deskripsi', harga_satuan='$harga', jumlah='$jumlah' WHERE kode='$kode'");
}
header("Location: index.php");
?>
