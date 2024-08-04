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
            <label for="daya">Batas Daya : </label>
            <select name="daya" id="daya">
                <option value="450">450 VA</option>
                <option value="900">900 VA</option>
            </select>

            <label for="kwh_lalu">Pemakaian KWH bulan lalu : </label>
            <input type="number" name="kwh_lalu" id="kwh_lalu">

            <label for="kwh_sekarang">Pemakaian KWH bulan sekarang : </label>
            <input type="number" name="kwh_sekarang" id="kwh_sekarang">

            <label for="materai">Biaya Materai </label>
            <input type="number" name="materai" id="materai">

            <button type="submit">Hitung</button>
        </form>
        <?php
        $admin = 3000;

        $values = [
            $_POST["daya"],
            $_POST['kwh_lalu'],
            $_POST['kwh_sekarang'],
            $_POST["materai"],
        ];

        foreach ($values as $value) {
            if (empty($value)) {
                echo "VALUE KAGA ADA";
            } else {
                echo "VALUE DAH ADA";
        $pemakaian_kwh = $kwh_sekarang - $kwh_lalu;
        ?>
        <p> kwh anda <?= $daya ?> kwh
        <p>
        <p> Pemakaian kwh <?= $pemakaian_kwh ?> kwh
        <p>
            }
        }


    </div>
</body>

</html>