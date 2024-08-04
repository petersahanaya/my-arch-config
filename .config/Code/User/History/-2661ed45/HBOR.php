<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $BATASDAYA = $_POST['batasdaya'];
        $HARGABELI = $_POST['hargabeli'];
        $BIAYAADM = $_POST['biayaadm'];
        $BIAYAMATERAI = $_POST['biayamaterai'];

        $SISA = $HARGABELI - $BIAYAADM - $BIAYAMATERAI;
        $PAJAK = $SISA * 0.1;
        $TOTAL = $SISA + $PAJAK;

        if ($BATASDAYA == 450) {
            $HARGAKWH = 415;
        } else if ($BATASDAYA == 900) {
            $HARGAKWH = 900;
        } else if ($BATASDAYA == 1200) {
            $HARGAKWH = 1467;
        }

        $TotalKwH = $TOTAL / $HARGAKWH;
    }
    ?>
    <h1>HARGA PEMAKAIAN ANDA</h1>
    <div class="index2">

        <p>Sisa Harga Beli :<?php echo $SISA ?></p><br>
        <p>Pajak Penerangan Jalan: Rp.<?php echo $PAJAK ?></p><br>
        <p>Total Harga : Rp.<?php echo $TOTAL ?></p><br>
        <p>Total Harga : Rp.<?php echo $HARGAKWH; ?></p><br>
        <p>Total KwH : Rp.<?php echo $TotalKwH; ?></p><br>
        </p><br>
    </div>
</body>

</html>