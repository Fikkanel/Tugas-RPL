<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2>Data Barang</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Barang</a>

    <?php
    if (!$conn) {
        echo '<div class="alert alert-danger">Koneksi database gagal.</div>';
        exit;
    }

    $result = $conn->query("SELECT * FROM barang");
    if (!$result) {
        echo '<div class="alert alert-danger">Query gagal: ' . htmlspecialchars($conn->error) . '</div>';
        exit;
    }
    ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['kode']) ?></td>
                <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                <td><?= nl2br(htmlspecialchars($row['deskripsi'])) ?></td>
                <td><?= number_format($row['harga_satuan'], 0, ',', '.') ?></td>
                <td><?= (int)$row['jumlah'] ?></td>
                <td>
                    <?php if (!empty($row['foto']) && file_exists('uploads/' . $row['foto'])): ?>
                        <img src="uploads/<?= htmlspecialchars($row['foto']) ?>" width="80" alt="<?= htmlspecialchars($row['nama_barang']) ?>">
                    <?php else: ?>
                        <span>Tidak ada foto</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="edit.php?kode=<?= urlencode($row['kode']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?kode=<?= urlencode($row['kode']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
