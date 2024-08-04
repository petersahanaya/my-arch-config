<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Hitung KWH</title>
</head>

<body>
    <div class="container">
        <h1>Perhitungan Biaya Listrik</h1>
        <form action="" method="POST">
            <label for="daya">Batas Daya: </label>
            <select name="daya" id="daya">
                <option value="450">450 VA</option>
                <option value="900">900 VA</option>
            </select>

            <label for="kwh_lalu">Pemakaian KWH bulan lalu: </label>
            <input type="number" name="kwh_lalu" id="kwh_lalu" required>

            <label for="kwh_sekarang">Pemakaian KWH bulan sekarang: </label>
            <input type="number" name="kwh_sekarang" id="kwh_sekarang" required>

            <label for="materai">Biaya Materai: </label>
            <input type="number" name="materai" id="materai" required>

            <button type="submit">Hitung</button>
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize input data
            function sanitizeInput($data)
            {
                return htmlspecialchars(strip_tags(trim($data)));
            }


            /* 450 BATAS DAYA */
            //Nilai Abodemen
            $nilaiAwal = 11_000;

            //Tarif - 450
            $tarifBlokSatu = 169;
            $tarifBlokDua = 360;
            $tarifBlokTiga = 495;

            //Batas Blok - 450
            $blokSatu = 30;
            $blokDua = 30;
            $blokTiga = 57.3;

            /* 900 BATAS DAYA */
            //Nilai abodemen
            $nilaiKedua = 20_000;

            //Batas Blok - 900
            $BlogSatu = 20;
            $BlogDua = 40;
            $BlogTiga = 57.3;

            //Tarif
            $TarifBlokSatu =

                // Get and sanitize POST data
                $daya = isset($_POST['daya']) ? sanitizeInput($_POST['daya']) : null;
            $kwh_lalu = isset($_POST['kwh_lalu']) ? (float) sanitizeInput($_POST['kwh_lalu']) : null;
            $kwh_sekarang = isset($_POST['kwh_sekarang']) ? (float) sanitizeInput($_POST['kwh_sekarang']) : null;
            $materai = isset($_POST['materai']) ? (float) sanitizeInput($_POST['materai']) : null;

            // Check if all required values are present
            if ($daya !== null && $kwh_lalu !== null && $kwh_sekarang !== null && $materai !== null) {
                $pemakaian_kwh = $kwh_sekarang - $kwh_lalu;
                $batasDaya = $daya;

                echo "<p>Batas Daya: {$daya} VA</p>";
                echo "<p>Pemakaian KWH bulan lalu: {$kwh_lalu} kWh</p>";
                echo "<p>Pemakaian KWH bulan sekarang: {$kwh_sekarang} kWh</p>";
                echo "<p>Biaya Materai: {$materai}</p>";
                echo "<p>Pemakaian KWH: {$pemakaian_kwh} kWh</p>";

                switch ($data) {
                    case 450:
                        $hasil = $batasDaya / 1000 * $nilaiAwal;

                        break;
                    case 900:
                        $hasil = $batasDaya / 1000 * $nilaiKedua;
                        break;
                }
            } else {
                echo "<p>Mohon lengkapi semua field.</p>";
            }
        }
        ?>
    </div>
</body>

</html>