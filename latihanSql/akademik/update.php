<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// Check if a new file is uploaded
if(isset($_FILES["foto"]) && $_FILES["foto"]["size"] > 0) {
    // Define the target directory
    $target_directory = "images/";

    // Define the target file name
    $foto_name = basename($_FILES["foto"]["name"]);
    $target_file = $target_directory . $foto_name;

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Update the database with the new photo name
        mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat', foto='$foto_name' WHERE id='$id'");
    } else {
        // Failed to upload file
        echo "Gagal mengunggah file.";
    }
    
} else {
    // If no new file is uploaded, update the data without changing the photo
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id='$id'");
}

header("location:listmahasiswa.php");
?>
