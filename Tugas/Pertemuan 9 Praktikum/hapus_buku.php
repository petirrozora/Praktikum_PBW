<?php include 'koneksi_db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'nav.php'; ?>

<div class="container mt-4">
    <h3>Hapus Buku</h3>
    <p>Pilih buku yang ingin dihapus dari database:</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM buku");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Judul']) ?></td>
                <td><?= htmlspecialchars($row['Penulis']) ?></td>
                <td><?= $row['Tahun_Terbit'] ?></td>
                <td>Rp<?= number_format($row['Harga'], 2, ',', '.') ?></td>
                <td>
                    <a href="proses_hapus.php?id=<?= $row['ID'] ?>"
                       onclick="return confirm('Yakin ingin menghapus buku ini?')"
                       class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
