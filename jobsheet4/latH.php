<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $awal = 5;
    $akhir = 20;
    $i=0;
    $max_i = 10;
    $big=-100;
    $acc_angka=0;

    do {
        $i++;
    
    $angka = rand($awal,$akhir);
    echo "nomor ke - ".$i." : " .$angka. "<br>";
    $acc_angka=$acc_angka+$angka;
    if ($angka > $big) {
        $big=$angka;
    }
    } while ($i<$max_i);
    
    echo "<br>";
    echo"jumlah seluruh angka ".$acc_angka."<br>";
    
    echo"angka terbesar ".$big."<br>";
    ?>
</body>
</html>