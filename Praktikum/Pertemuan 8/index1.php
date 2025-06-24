<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$hari = "Senin";

//switch ($hari) {
   //case "Senin":
       //echo "Hari pertama kerja!";
       //break;
   //case "jum'at":
       //echo "Solat jumat!";
       //break;
   //case "Minggu":
       //echo "Libur akhir pekan!";
       //break;
   //default:
       //echo "Hari biasa.";
//}

for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-" . $i . "<br>";
}

$buah = ["Apel", "Jeruk", "Mangga"];


for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}

$nilai = 1;


while ($nilai <= 5) {
    echo "Nilai: ". $nilai ."<br>";
    $nilai++;
}

$mahasiswa = [
   "10001" => "Mahesa",
   "10002" => "Nuy",
   "10003" => "Delman"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}

$umur = 19;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";


echo $status;

include 'menu.php';
require 'header.php';


?>
</body>
</html>