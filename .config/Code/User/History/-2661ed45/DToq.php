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

    <main class="container">
        <h1>HARGA PEMAKAIAN ANDA</h1>
        <div class="hasil">
            <div>
                <p>
                    Sisa Harga Beli
                </p>
                <span> <?php echo $SISA ?> </span>
            </div><br>
            <div>
                <p>Pajak Penerangan Jalan</p>
                <span> Rp.<?php echo $PAJAK ?> </span>
            </div><br>
            <div>
                <p> Total Harga </p>
                <span>Rp.<?php echo $TOTAL ?> </span>
            </div><br>
            <div>
                <p>Harga KWH</p>
                <span> Rp.<?php echo $HARGAKWH; ?> </span>
            </div><br>
            <hr />
            <div style="margin-top : 1rem;">
                <p> Total KwH </p>
                <span> Rp.<?php echo $TotalKwH; ?> </span>
            </div>
            <br>
        </div>
    </main>
</body>

</html>