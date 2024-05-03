<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Data</title>
</head>
<body>

<?php
do {
    // Memeriksa apakah data dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menangkap data yang dikirimkan dari formulir
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];
        $alamat = $_POST["alamat"];
        
        // Menampilkan data yang dimasukkan pengguna
        echo "<h2>Data yang dimasukkan:</h2>";
        echo "Nama: $nama <br>";
        echo "Umur: $umur <br>";
        echo "Alamat: $alamat <br>";
    }
?>

<form method="post" action="home.php">
    <br>
    Apakah Anda ingin melakukan input data lagi?<br><br>
    <input type="submit" name="ya" value="Ya">
    <input type="submit" name="tidak" value="Tidak">
</form>

<?php
// Melakukan perulangan jika tombol "Ya" ditekan
} while (isset($_POST['ya']));
?>

</body>
</html>
