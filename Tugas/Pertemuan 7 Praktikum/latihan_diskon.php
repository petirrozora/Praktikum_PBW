<!DOCTYPE html>
<html>
<head>
    <title>Form Diskon Pembayaran UKT</title>
</head>
<body>

<form method="post" action="">
    NPM: <input type="text" name="npm"><br>
    Nama: <input type="text" name="nama"><br>
    Prodi: <input type="text" name="prodi"><br>
    Semester: <input type="number" name="semester"><br>
    Biaya UKT (Rp): <input type="number" name="ukt"><br>
    <input type="submit" value="Hitung Diskon">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];
    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5;
        }
    }

    $potongan = ($diskon / 100) * $ukt;
    $total_bayar = $ukt - $potongan;

    echo "<hr>";
    echo "NPM : $npm <br>";
    echo "NAMA : $nama <br>";
    echo "PRODI : $prodi <br>";
    echo "SEMESTER : $semester <br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
