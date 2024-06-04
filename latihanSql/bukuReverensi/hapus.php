<?php
include 'koneksi.php';

$id = $_GET['kdReferensi'];
mysqli_query($koneksi,"delete from bukureferensi where kdReferensi = '$id'");

header("location:listreferensi.php");
?>