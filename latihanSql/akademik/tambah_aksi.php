<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// Proses foto pindah ke folder lain
$target_directory = "images/";
$target_file = $target_directory . basename($_FILES["foto"]["name"]);

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    $foto = basename($_FILES["foto"]["name"]);
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$alamat', '$foto')");
    header("location:listmahasiswa.php");
} else {
    echo "Gagal mengunggah file.";
}
?>
