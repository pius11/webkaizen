<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LIST REFERENSI</h2>
    <a href="form.php">instert data</a>
    <br>
    <table border="1">
    <tr>
        <th>no</th>
        <th>kd referensi</th>
        <th>judul referensi</th>
        <th>jenis referensi</th>
        <th>jumlah halaman</th>
        <th>nomor ISBN</th>
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

    $query2 = mysqli_query($koneksi, "select * from bukureferensi");
    $jmldata =  mysqli_num_rows($query2);
    $jmlhalaman = ceil($jmldata/$batas);

    echo "<br> Halaman";

    for ($i=1; $i <= $jmlhalaman ; $i++) 
        if ($i != $halaman) {
            echo "<a href=\"listreferensi_page.php?halaman=$i\">$i</a> | ";
            // echo" <a href=\"listmahasiswa_page.php?halaman=$i\">$i</a> | ";
        } else {
           echo "<b>$i</b> | ";
        }
    
    echo "<p>total buku : <b>$jmldata</b> buah</p>";

    //sesuaikan query dengan posisi batas
    $query = "select * from bukureferensi LIMIT $posisi,$batas";




    $data = mysqli_query($koneksi,$query);
    while ($d = mysqli_fetch_array($data)) {
       ?>
       <tr>
       <td><?php echo $no++; ?></td>
                <td><?php echo $d['kdReferensi']; ?></td>
                <td><?php echo $d['jdReferensi']; ?></td>
                <td><?php echo $d['jenisReferensi']; ?></td>
                <td><?php echo $d['jumlahHalaman']; ?></td>
                <td><?php echo $d['noISBN']; ?></td>

        <td>
            <a href="edit.php?kdReferensi=<?php echo $d['kdReferensi']; ?>">edit</a>

            <a href="hapus.php?kdReferensi=<?php echo $d['kdReferensi']; ?>">hapus</a>
        </td>
       </tr>
       <?php
    }
    ?>
    </table>
</body>
</html>