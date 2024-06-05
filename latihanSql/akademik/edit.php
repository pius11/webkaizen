<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listmahasiswa.php">kembali</a><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>

        <form action="update.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>name</td>
        <td>
            <input type="hidden" name="id" value="<?php echo $d['id'];?>">
            <input type="text" name="nama" value="<?php echo $d['nama'];?>">
        </td>
    </tr>

    <tr>
        <td>nim</td>
        <td><input type="number" name="nim" value="<?php echo $d['nim'];?>" ></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>" ></td>
    </tr>
    <tr>
        <td>foto profile </td>
        <td><input type="file" name="foto" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan"></td>
    </tr>
</table>

        </form>
        <?php
    }
    ?>
</body>
</html>