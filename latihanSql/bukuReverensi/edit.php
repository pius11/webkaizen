<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listreferensi.php">kembali</a><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['kdReferensi'];
    $data = mysqli_query($koneksi,"select * from bukureferensi where kdReferensi='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>

        <form action="update.php" method="post">
<table>
    <tr>
        <td>nma matakuliah</td>
        <td>
            <input type="hidden" name="kdReferensi" value="<?php echo $d['kdReferensi'];?>">
            <input type="text" name="jdReferensi" value="<?php echo $d['jdReferensi'];?>">
        </td>
    </tr>

    <tr>
                <td>jenis referensi</td>
                <td><select name="jenisReferensi" >
            <option value="jurnal" value="<?php echo $d['jenisReferensi'];?>" >jurnal</option>
            <option value="proseding" value="<?php echo $d['jenisReferensi'];?>" >proseding</option>
            <option value="buku ajar" value="<?php echo $d['jenisReferensi'];?>" >buku ajar</option>
                    </select>
                </td>
            </tr>

    <tr>
        <td>jumlah halaman</td>
        <td><input type="number" name="jumlahHalaman" value="<?php echo $d['jumlahHalaman'];?>" ></td>
    </tr>
    <tr>
        <td>nomor ISBN</td>
        <td><input type="text" name="noISBN" value="<?php echo $d['noISBN'];?>" ></td>
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