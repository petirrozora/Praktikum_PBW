<?php
// Definisi konstanta pajak
define("PAJAK", 0.1); // 10%

// Array untuk menyimpan informasi barang
$nama_barang = "Keyboard";
$harga_satuan = 150000;
$jumlah_beli = 2;

// Menghitung total harga sebelum pajak
$total_harga = $harga_satuan * $jumlah_beli;

// Menghitung nilai pajak
$nilai_pajak = $total_harga * PAJAK;

// Menghitung total bayar
$total_bayar = $total_harga + $nilai_pajak;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Times New Roman, serif;
            margin: 20px;
        }
        .struk {
            width: 620px;
            border: 1px solid #000;
            padding: 10px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        hr {
            border: none;
            border-top: 1px solid #000;
            margin: 10px 0;
        }
        .item-info {
            margin: 15px 0;
            line-height: 1.5;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="struk">
        <h1>Perhitungan Total Pembelian (Dengan Array)</h1>
        <hr>
        <div class="item-info">
            <p>Nama Barang: <?php echo $nama_barang; ?></p>
            <p>Harga Satuan: Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></p>
            <p>Jumlah Beli: <?php echo $jumlah_beli; ?></p>
            <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></p>
            <p>Pajak (10%): Rp <?php echo number_format($nilai_pajak, 0, ',', '.'); ?></p>
            <p class="total">Total Bayar: Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></p>
        </div>
    </div>
</body>
</html>