<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD DATA MAHASISWA</h1><br>
    <a href="listmahasiswa.php">kembali</a>
    <br>
    <br>
    <h3>TAMBAH DATA</h3>
    <form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim" ></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" ></td>
            </tr>
            <tr>
                <td>foto profile</td>
                <td><input type="file" name="foto"  ></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" ></td>
            </tr>
        </table>
    </form>
</body>
</html>