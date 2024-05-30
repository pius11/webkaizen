<?php
include 'koneksi.php';

$kdmk = $_POST['kodeMk'];
$namamk = $_POST['namaMk'];
$jmlsks = $_POST['jumlahSKS'];
$semester = $_POST['semester'];
$mkinti = $_POST['mkInti'];


mysqli_query($koneksi,"update matakuliah set namaMk='$namamk',jumlahSKS='$jmlsks',semester='$semester',mkInti='$mkinti' where kodeMk='$kdmk'");

header("location:listmatkul.php");
?>