<?php
include 'koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Pelanggan berhasil dihapus'); window.location='pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pelanggan: " . addslashes($stmt->error) . "'); window.location='pelanggan.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
