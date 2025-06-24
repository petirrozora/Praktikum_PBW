<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $stmt = $conn->prepare("UPDATE pelanggan SET Nama = ?, Alamat = ?, Email = ?, Telepon = ? WHERE ID = ?");
    $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui: " . addslashes($stmt->error) . "'); window.location='pelanggan.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>
