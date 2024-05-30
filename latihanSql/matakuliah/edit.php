<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listmatkul.php">kembali</a><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['kodeMk'];
    $data = mysqli_query($koneksi,"select * from matakuliah where kodeMk='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>

        <form action="update.php" method="post">
<table>
    <tr>
        <td>nma matakuliah</td>
        <td>
            <input type="hidden" name="kodeMk" value="<?php echo $d['kodeMk'];?>">
            <input type="text" name="namaMk" value="<?php echo $d['namaMk'];?>">
        </td>
    </tr>

    <tr>
        <td>jumlah sks</td>
        <td><input type="number" name="jumlahSKS" value="<?php echo $d['jumlahSKS'];?>" ></td>
    </tr>
    <tr>
        <td>semester</td>
        <td><input type="number" name="semester" value="<?php echo $d['semester'];?>" ></td>
    </tr>
    <tr>
        <td>matakuliah inti</td>
        <td><input type="radio" name="mkInti" value="1"  value="<?php echo $d['semester'];?>" >ya 
        <input type="radio" name="mkInti" value="0"  value="<?php echo $d['semester'];?>" >tidak</td>
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