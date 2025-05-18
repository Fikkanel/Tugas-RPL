<?php include 'db.php';
$kode = $_GET['kode'];
$data = $conn->query("SELECT * FROM barang WHERE kode='$kode'")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Barang</h2>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="kode" value="<?= $data['kode'] ?>">
        <input type="text" name="nama_barang" class="form-control mb-2" value="<?= $data['nama_barang'] ?>" required>
        <textarea name="deskripsi" class="form-control mb-2"><?= $data['deskripsi'] ?></textarea>
        <input type="number" name="harga_satuan" class="form-control mb-2" value="<?= $data['harga_satuan'] ?>" required>
        <input type="number" name="jumlah" class="form-control mb-2" value="<?= $data['jumlah'] ?>" required>
        <input type="file" name="foto" class="form-control mb-2">
        <img src="uploads/<?= $data['foto'] ?>" width="80" class="mb-2">
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
