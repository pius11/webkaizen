<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
    $gajpokok = $_POST['gaji_pokok'];
    $jumlah_hari_kerja = $_POST['jumlah_hari_kerja'];
   

    if ($jabatan == "manager") {
        $um = $jumlah_hari_kerja * 50000;
        $u = 50000;
        $tj = 1500000 ;
    }
    else if ($jabatan == "supervisor") {
        $um = $jumlah_hari_kerja *  30000;
        $u =  30000;
        $tj = 500000 ;
    }
    else if ($jabatan == "staf") {
        $um = $jumlah_hari_kerja * 25000;
        $u = 25000;
        $tj = 150000 ;
    }

    $total = $um + $tj + $gajpokok ;

    

    ?>
    <div class="eccho"> <?php 
    echo "NAMA : $nama <br>";
echo "alamat : $alamat <br>";
echo "jabatan : $jabatan <br>";
echo "gaji pokok : $gajpokok <br>";
echo "jumlah hari kerja : $jumlah_hari_kerja <br>";
echo "uang makan : $jumlah_hari_kerja X $u = $um <br>";
echo "tunjangan jabatan : $tj <br>";
echo "total gaji : $um + $tj + $gajpokok = $total";
?>
</div>
</body>
</html>