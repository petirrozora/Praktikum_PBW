<?php
include 'koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus dari detail_pesanan dahulu
    $stmtDetail = $conn->prepare("DELETE FROM detail_pesanan WHERE Buku_ID = ?");
    $stmtDetail->bind_param("i", $id);
    $stmtDetail->execute();
    $stmtDetail->close();

    // Hapus dari buku
    $stmt = $conn->prepare("DELETE FROM buku WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Buku berhasil dihapus!'); window.location='hapus_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus: " . addslashes($stmt->error) . "'); window.location='hapus_buku.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='hapus_buku.php';</script>";
}

$conn->close();
?>
