<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>form input gaji karyawan</h2>
    <br><br>

    <form action="proses.php" method="post">
        <p>kode karyawan</p><br>
    <input type="text" name="kdKaryawan" >
    <br><br>
    <p>nama karyawan</p> <br>
    <input type="text" name="nama" >
    <br><br>
    <p>gaji pokok</p><br>
    <input type="text" name="gajiPokok" >
    <br><br>

    <p>jabatan</p><br>
   <select name="jabatan" id="">
    <option value="manager">Manager</option>
    <option value="supervisor"> Super visor</option>
    <option value="staf">staf</option>
   </select>
    <br><br>

    <p>jumlah hari kerja</p><br>
    <input type="text" name="JHK">
    <br><br>

    <p>masa kerja (tahun)</p><br>
    <input type="text" name="masaKerja">
<br>
<input type="submit" value="kirim">
    </form>
</body>
</html>