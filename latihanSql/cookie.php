<?php
 $expire = time()+10;
 setcookie('kunjungan', 1, $expire);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['kunjungan'])) {
        echo "selamat datang kembali";
    }else {
        echo "selamat datang ini kunjungan pertama";
    }
    
    ?>
</body>
</html>