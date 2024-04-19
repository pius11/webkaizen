<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = $_POST['nama'];
    $JK = $_POST['jenis_kelamin'];
    $SP = $_POST['status'];
    $JL = $_POST['jam_lembur'];

    if ($SP == "pegawai_ASN") {
        $u=20000;
        $total_uanglem= $JL * $u ;
       
    }if ($SP == "dosen_ASN") {
        $u=40000;
        $total_uanglem= $JL * $u ;
        
    }if ($SP == "pegawai_P3K") {
        $u=15000;
        $total_uanglem= $JL * $u ;
        
    }if ($SP == "dosen_p3K") {
        $u=35000;
        $total_uanglem= $JL * $u ;
        
    }

    echo "nama  = $nama";
    echo "jenis kelamin  = $JK <br>";
    echo "status pegawai  = $SP <br>";
    echo "jam lembur  = $JL <br>";
    echo "jembur perjam  = $u <br>";
    echo "total uang lembur  = $total_uanglem <br>";
    
    ?>

</body>
</html>