<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form input lembur pegawai</h1>
    <form name="form_inputLembur" action="proses_ulangan1.php" method="post" class="kotak">
        <div class="M">
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
</div>
    </form>
</body>
</html>