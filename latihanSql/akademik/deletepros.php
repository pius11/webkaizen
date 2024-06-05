<?php
include 'koneksi.php';

$id = $_GET['id'];

// Dapatkan nama file yang akan dihapus dari database
$query = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT foto FROM mahasiswa WHERE id = '$id'"));
unlink("images/" . $query['foto']);

mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$id'");

header("location:listmahasiswa.php");
?>
