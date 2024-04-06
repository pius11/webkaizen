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
    $acc_angka=0;

    while ($i <$max_i) {
        $i++;
        $angka = rand($awal,$akhir);
        echo "angka ke -".$i.": ".$angka."<br>";
        $acc_angka = $acc_angka+$angka;

    }

    echo "<br>";
    echo"jumlah seluruh angka ".$acc_angka;
    ?>
</body>
</html>