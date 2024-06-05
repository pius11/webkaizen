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
        <th>foto profile</th>
        <th>nama</th>
        <th>nim</th>
        <th>alamat</th>
        <td>opsi</td>
    </tr>
    

    <?php
    
    include "koneksi.php";
   $no=1;
   //batas, cek halamab dan posisi data
    $batas = 5;
    $halaman = @$_GET['halaman'];

    if (empty($halaman)) {
        $posisi = 0;
        $halaman = 1;
    } else {
        $posisi = ($halaman-1)* $batas;
    }
    $no = ($halaman-1) * $batas + 1;
    //hitung total data

    $query2 = mysqli_query($koneksi, "select * from mahasiswa");
    $jmldata =  mysqli_num_rows($query2);
    $jmlhalaman = ceil($jmldata/$batas);

    echo "<br> Halaman";

    for ($i=1; $i <= $jmlhalaman ; $i++) 
        if ($i != $halaman) {
            echo "<a href=\"listmahasiswa_page.php?halaman=$i\">$i</a> | ";
            // echo" <a href=\"listmahasiswa_page.php?halaman=$i\">$i</a> | ";
        } else {
           echo "<b>$i</b> | ";
        }
    
    echo "<p>total anggota : <b>$jmldata</b> orang</p>";

    //sesuaikan query dengan posisi batas
    $query = "select * from mahasiswa LIMIT $posisi,$batas";




    $data = mysqli_query($koneksi,$query);
    while ($d = mysqli_fetch_array($data)) {
       ?>
       <tr>
        <td><?php echo $no++;?></td>
        <td><img src="images/<?php echo $d['foto'];?>" alt="fotoprofile" style="width: 100px; height: auto;" ></td>
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