<?php
    $nama = "Felyn";
    $uang = 2000;
    $data_diri = ["Felyn", 2000];
    $arr_data = [
        "nama" => "Felyn",
        "uang" => 2000,
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
</head>
<body>
    <?php
        echo $nama . "<br>";
        echo $uang . "<br>";
        var_dump($data_diri);
        echo "<br>";

        for ($i=0; $i < 3; $i++) { 
            echo $i . "<br>";
        }

        foreach ($data_diri as $nilai) {
            echo $nilai . "<br>";
        }
    ?>

</body>
</html>