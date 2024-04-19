<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="page">PAGE 1</p>
    <form action="proses.php" method="post" >
    <p>NAMA : <input type="text" name="nama" class="nama"></p><br>
    <p>ALAMAT :<input type="text" name="alamat" class="alamat"></p><br>
    <p>JABATAN :
    <select name="jabatan" >
    <option value="manager">Manager</option>
    <option value="supervisor">Super Visor</option>
    <option value="staf">Staf</option>
    </select></p><br>
    <p>GAJI POKOK : <input type="text" name="gaji_pokok" class="gaj"></p><br>
    <p>JUMLAH HARI KERJA :<input type="text" name="jumlah_hari_kerja"></p><br>
    <input type="submit" >
    </form>
    
</body>
</html>