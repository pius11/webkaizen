<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>login user</h2>
    <br>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "login gagal, cek user dan password and";
        }else if ($_GET['pesan']=="login") {
            echo "anda berhasil login";
            header('location:menu_akademik.php');
        }elseif ($_GET['pesan'] == "belum_login") {
            echo "anda harus register";
        }
    } 
    
    
    ?>
    <br>
    <br>

    <form action="cek_login.php" method="post">

    <table>
        <tr>
            <td>username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="masukan username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="masukan password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="login"></td>
        </tr>
    </table>
    </form>
</body>
</html>