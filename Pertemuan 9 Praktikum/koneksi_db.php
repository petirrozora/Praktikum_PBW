<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Koneksi Database</title>
</head>
<body>
    <?php
    $host = "sql205.infinityfree.com"; // GANTI sesuai info di panel
    $user = "if0_38733129";            // GANTI sesuai user hosting kamu
    $pass = "1fV7TOOvwQJA8c";           // GANTI dengan password database kamu
    $db   = "if0_38733129_struktur_database_buku";     // GANTI sesuai nama database kamu

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    } else {
        echo "Koneksi ke database berhasil!";
    }
    ?>
</body>
</html>
