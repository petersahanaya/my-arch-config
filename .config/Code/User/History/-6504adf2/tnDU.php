<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Biaya Listrik</title>
</head>

<body>
    <h1>Perhitungan Biaya Listrik</h1>
    <form action="" method="post">
        <label for="daya">Batas Daya (VA):</label>
        <select name="daya" id="daya">
            <option value="450">450 VA</option>
            <option value="900">900 VA</option>
        </select><br><br>

        <label for="kwh_lalu">Pemakaian kWh bulan lalu:</label>
        <input type="number" name="kwh_lalu" id="kwh_lalu" required><br><br>

        <label for="kwh_sekarang">Pemakaian kWh bulan sekarang:</label>
        <input type="number" name="kwh_sekarang" id="kwh_sekarang" required><br><br>

        <label for="materai">Biaya Materai (Rp):</label>
        <input type="number" name="materai" id="materai" required><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    // Ganti REQUEST_METHOD dengan nama variabel lain
    $request_method = $_SERVER["REQUEST_METHOD"];

    if ($request_method == "POST") {
        // Ambil data dari form
        $daya = $_POST['daya'];
        $kwh_lalu = $_POST['kwh_lalu'];
        $kwh_sekarang = $_POST['kwh_sekarang'];
        $materai = $_POST['materai'];
        $admin = 3000;

        // Hitung pemakaian kWh
        $pemakaian_kwh = $kwh_sekarang - $kwh_lalu;

        // Tentukan tarif dan batas blok berdasarkan daya
        if ($daya == 450) {
            $tarif_blok1 = 169;
            $tarif_blok2 = 360;
            $tarif_blok3 = 495;
            $batas_blok1 = 30;
            $batas_blok2 = 30;
            $batas_blok3 = 57.3;
            $abodemen = 11000;
        } else if ($daya == 900) {
            $tarif_blok1 = 275;
            $tarif_blok2 = 445;
            $tarif_blok3 = 495;
            $batas_blok1 = 20;
            $batas_blok2 = 40;
            $batas_blok3 = 57.3;
            $abodemen = 20000;
        }

        // Hitung biaya beban
        $biaya_beban = ($daya / 1000) * $abodemen;

        // Hitung biaya pemakaian per blok
        $pemakaian_blok1 = min($pemakaian_kwh, $batas_blok1) * $tarif_blok1;
        $pemakaian_blok2 = min(max($pemakaian_kwh - $batas_blok1, 0), $batas_blok2) * $tarif_blok2;
        $pemakaian_blok3 = max($pemakaian_kwh - $batas_blok1 - $batas_blok2, 0) * $tarif_blok3;

        // Total biaya pemakaian blok
        $total_biaya_pemakaian_blok = $pemakaian_blok1 + $pemakaian_blok2 + $pemakaian_blok3;

        // Pajak Penerangan Jalan
        $ppj = 0.1 * $total_biaya_pemakaian_blok;

        // Total yang harus dibayar
        $total_bayar = $total_biaya_pemakaian_blok + $ppj + $admin + $materai;
    ?>

        <h2>Hasil Perhitungan Biaya Listrik</h2>
        <p>Pemakaian kWh: <?php echo $pemakaian_kwh; ?> kWh</p>
        <p>Biaya Beban: Rp. <?php echo $biaya_beban; ?></p>
        <p>Biaya Pemakaian Blok I: Rp. <?php echo $pemakaian_blok1; ?></p>
        <p>Biaya Pemakaian Blok II: Rp. <?php echo $pemakaian_blok2; ?></p>
        <p>Biaya Pemakaian Blok III: Rp. <?php echo $pemakaian_blok3; ?></p>
        <p>Total Biaya Pemakaian Blok: Rp. <?php echo $total_biaya_pemakaian_blok; ?></p>
        <p>Pajak Penerangan Jalan: Rp. <?php echo $ppj; ?></p>
        <p>Biaya Administrasi: Rp. <?php echo $admin; ?></p>
        <p>Biaya Materai: Rp. <?php echo $materai; ?></p>
        <h2>Total yang harus dibayar: Rp. <?php echo $total_bayar; ?></h2>

    <?php } ?>
</body>

</html>