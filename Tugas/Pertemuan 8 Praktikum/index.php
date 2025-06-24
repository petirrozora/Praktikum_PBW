<!DOCTYPE html>
<html>
<head><title>Latihan Praktikum</title></head>
<body>
    <h2>Menu Praktikum</h2>
    <ul>
        <li><a href="?page=soal1">Soal 1 - Switch Kendaraan</a></li>
        <li><a href="?page=soal2">Soal 2 - Bilangan Genap</a></li>
        <li><a href="?page=soal3">Soal 3 - Array Hewan</a></li>
        <li><a href="?page=soal4">Soal 4 - Ternary Genap/Ganjil</a></li>
    </ul>
    <hr>
    <div>
        <?php
        if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            echo "Silakan pilih soal dari menu di atas.";
        }
        ?>
    </div>
</body>
</html>
