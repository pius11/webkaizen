<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    
    session_start();
    $username=$_SESSION['username'];
    $status=$_SESSION['status'];

    echo "<h2>Selamat datang $username, anda berhasil login</h2>
    menu utama  <br><br>
    <a href='./akademik/listmahasiswa.php'>data mahasiswa</a>
    <a href='./akademik/listmahasiswa.php'>data dosen</a>";
    ?>
    
    <form action="logout.php" method="post">
        <input type="submit" value="logout">
    </form>

    
</body>
</html>