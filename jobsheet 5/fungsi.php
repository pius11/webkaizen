<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function totalPembayaran($vQty, $vHarga)
    {
        return $vQty * $vHarga;
    }
    function diskon($vtotPembayaran)
    {
        if ($vtotPembayaran >= 500000) {
            $discount = $vtotPembayaran * 0.1;
        } else {
            $discount = 0;
        }
        return $discount;
    }
    function totalAfterDiskon($vbayar, $vdisc)
    {
        return $vbayar - $vdisc;
    }
    $namaproduc = " citato 1kg";
    $harga = 250000;
    $Qty = 5;
    $vtotal = totalPembayaran($Qty, $harga);
    $mydis = diskon($vtotal);
    $after = totalAfterDiskon($vtotal, $mydis);
    echo "nama produk: $namaproduc <br>";
    echo "harga : $harga <br>";
    echo "QTY : $Qty <br><br>";
    echo "total pembayaran : $vtotal <br>";
    echo "diskon : $mydis <br>";
    echo "harga setelah diskon : $after <br>";
    ?>
</body>

</html>