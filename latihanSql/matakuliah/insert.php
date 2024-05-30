<?php
include 'koneksi.php';

$kdmk = $_POST['kodeMk'];
$namamk = $_POST['namaMk'];
$jmlsks = $_POST['jumlahSKS'];
$semester = $_POST['semester'];
$mkinti = $_POST['mkInti'];


mysqli_query($koneksi,"insert into matakuliah values('$kdmk','$namamk','$jmlsks','$semester','$mkinti')");

header("location:listmatkul.php");
?>