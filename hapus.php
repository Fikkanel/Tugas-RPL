<?php
include 'db.php';
$kode = $_GET['kode'];
$conn->query("DELETE FROM barang WHERE kode='$kode'");
header("Location: index.php");
?>
