<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INSERT DATA buku referensi</h1><br>
    <a href="listreferensi.php">kembali</a>
    <br>
    <br>
    <h3>TAMBAH DATA</h3>
    <form action="insert.php" method="post">
        <table>
            
            <tr>
                <td>judul referensi</td>
                <td><input type="text" name="jdReferensi" ></td>
            </tr>
            <tr>
                <td>jenis referensi</td>
                <td><select name="jenisReferensi" >
            <option value="jurnal">jurnal</option>
            <option value="proseding">proseding</option>
            <option value="buku ajar">buku ajar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>jumlah halaman</td>
                <td><input type="number" name="jumlahHalaman" ></td>
            </tr>
            <tr>
                <td>nomor ISBN</td>
                <td><input type="text" name="noISBN" ></td>
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