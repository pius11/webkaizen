<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INSERT DATA MATAKULIAH</h1><br>
    <a href="listmatkul.php">kembali</a>
    <br>
    <br>
    <h3>TAMBAH DATA</h3>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>kode matakuliah</td>
                <td><input type="text" name="kodeMk" ></td>
            </tr>
            <tr>
                <td>nama matakuliah</td>
                <td><input type="text" name="namaMk" ></td>
            </tr>
            <tr>
                <td>jumlah sks</td>
                <td><input type="text" name="jumlahSKS" ></td>
            </tr>
            <tr>
                <td>semester</td>
                <td><input type="number" name="semester" ></td>
            </tr>
            <tr>
                <td>mata kuliah inti</td>
                <td><input type="radio" name="mkInti" value="1">ya <input type="radio" name="mkInti" value="0">tidak</td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" ></td>
            </tr>
        </table>
    </form>
</body>
</html>