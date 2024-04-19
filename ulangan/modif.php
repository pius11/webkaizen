<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form input lembur pegawai</h1>
    <form name="form_inputLembur" method="post">
        NAMA <br>
        <input type="text" name="nama" id=""><br><br>
        JENIS KELAMIN <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">perempuan <br><br>
        STATUS PEGAWAI <br>
        
        <select name="status" >
            <option value="pegawai_ASN">pegawai_ASN</option>
            <option value="dosen_ASN">dosen_ASN</option>
            <option value="pegawai_P3K">pegawai_P3K</option>
            <option value="dosen_p3K">dosen_p3K</option>
        </select><br><br>
        JAM LEMBUR <br>
        <input type="text" name="jam_lembur" ><br>
<input type="submit">
        
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
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
    }
    

    
    
    ?>
</body>
</html>