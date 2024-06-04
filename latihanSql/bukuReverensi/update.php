<?php
include 'koneksi.php';

$kdref = $_POST['kdReferensi'];
$jdref = $_POST['jdReferensi'];
$jenisref = $_POST['jenisReferensi'];
$jlmhal = $_POST['jumlahHalaman'];
$noisbn = $_POST['noISBN'];


mysqli_query($koneksi,"update bukureferensi set jdReferensi='$jdref',jenisReferensi='$jenisref',jumlahHalaman='$jlmhal',noISBN='$noisbn' where kdReferensi='$kdref'");

header("location:listreferensi.php");
?>