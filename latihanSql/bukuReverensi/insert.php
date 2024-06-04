<?php
include 'koneksi.php';

$jdf = $_POST['jdReferensi'];
$jenisre = $_POST['jenisReferensi'];
$jmlhal = $_POST['jumlahHalaman'];
$noisbn = $_POST['noISBN'];



mysqli_query($koneksi,"insert into bukureferensi values('','$jdf','$jenisre','$jmlhal','$noisbn')");

header("location:listreferensi.php");
?>