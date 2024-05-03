<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>nim</th>
        <th>alamat</th>
        <td>opsi</td>
    </tr>

    <?php
    
    include "koneksi.php";
   
    $data = mysqli_query($koneksi,"select * from mahasiswa");
    while ($d = mysqli_fetch_array($data)) {
       ?>
       <tr>
        <td><?php echo $d['id'];?></td>
        <td><?php echo $d['nama'];?></td>
        <td><?php echo $d['nim'];?></td>
        <td><?php echo $d['alamat'];?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id']; ?>">edit</a>
            <a href="deletepros.php?id=<?php echo $d['id']; ?>">hapus</a>
        </td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>