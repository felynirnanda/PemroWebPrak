<?php 
require("Tabung.php");
// var_dump($_POST);
if (isset($_POST["tombolvolume"]))
{
    // $tinggi = $_POST["tinggi"];
    // $jarijari = $_POST["Jarijari"];
    // $Volume = 3.14 * $tinggi * $jarijari * $jarijari;

    $tabung = new Tabung();
    $tabung->setTinggi($_POST["tinggi"]);
    $tabung->setJarijari($_POST["Jarijari"]);
    $tabung->hitungVolume();
    $Volume = $tabung->getVolume();
    // $jarijari = $_POST["Jarijari"];
    // $Volume = 3.14 * $tinggi * $jarijari * $jarijari;
}
else {
    $Volume = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Jari-jari</label>
        <input type="text" name="Jarijari"> <br>
        <label for="">Tinggi</label>
        <input type="text" name="tinggi"> <br>
        <button type="" name="tombolvolume">Hitung Volume </button>
    </form>
<h2>Hasil Perhitungan adalah <?= $Volume; ?> </h2>
    </body>
    </html>