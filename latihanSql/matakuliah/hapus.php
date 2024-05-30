<?php
include 'koneksi.php';

$id = $_GET['kodeMk'];
mysqli_query($koneksi,"delete from matakuliah where kodeMk = '$id'");

header("location:listmatkul.php");
?>