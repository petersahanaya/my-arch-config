<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div>
        <h1>FORM HITUNG TARIF DASAR REGULER DAN PRABAYAR</h1>
        <form action="uassphp2.php" method="POST">
            <div class="index">
                <br>
                <label for="batasdaya">Batas Daya</label>
                <select type="number" class="batasdaya" id="batasdaya" name="batasdaya" required>
                    <option value="450">450 VA</option>
                    <option value="900">900 VA</option>
                    <option value="1200">1200 VA</option>
                </select><br>

                <label for="hargabeli">Harga Beli</label>
                <input type="number" id="hargabeli" name="hargabeli" required><br>

                <label for="biayaadm">Pemakaian kWh bulan sekarang</label>
                <input type="number" id="biayaadm" name="biayaadm" required><br>

                <label for="biayamaterai">Biaya Materai</label>
                <input type="number" id="biayamaterai" name="biayamaterai" required><br>

                <button type="submit"><a href="uassphp2.php"></a>Totalnya</button>
            </div>
        </form>
    </div>

</body>

</html>