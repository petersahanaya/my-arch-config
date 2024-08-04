<?php
//ENUM - BATAS DAYA
enum BatasDaya: string
{
    case SEMBILAN_RATUS = "900";
    case EMPAT_RATUS_LIMA_PULUH = "450";
    case SERIBU_DUA_RATUS = "1200";
}

//REQUEST METHOD
$method = $_SERVER["REQUEST_METHOD"];

//CONSTANT - BIAYA ADMINISTRASI
const BIAYA_ADMINISTRASI = 3000;

//CONSTANT - TARIF
const TARIF_450_KWH = 415;
const TARIF_900_KWH = 605;
const TARIF_1200_KWH = 1467;


//CONDITION
if ($method === "POST") {
    //INPUTS
    $batasDaya = $_POST["batas-daya"];
    $hargaBeli = $_POST["harga-beli"];
    $biayaMaterai = $_POST["materai"];

    //Sisa Harga Beli - (Harga Beli - Biaya Administrasi - Biaya Materai)
    $sisaHargaBeli = (int)$hargaBeli - BIAYA_ADMINISTRASI - (int)$biayaMaterai;

    //Pajak Penerangan Jalan - (Sisa Harga Beli * 10 % atau 0.10)
    $pajakPeneranganJalan = $sisaHargaBeli * 0.10;

    //Total Harga - (Sisa Harga Beli + Pajak Penerangan Jalan)
    $totalHarga = $sisaHargaBeli + $pajakPeneranganJalan;

    switch ($batasDaya) {
        case BatasDaya::EMPAT_RATUS_LIMA_PULUH->value:
            $totalKWH = $totalHarga / TARIF_450_KWH;
            break;
        case BatasDaya::SEMBILAN_RATUS->value:
            $totalKWH = $totalHarga / TARIF_900_KWH;
            break;
        case BatasDaya::SERIBU_DUA_RATUS->value:
            $totalKWH = $totalHarga / TARIF_1200_KWH;
            break;
    }

    // Menampilkan hasil dalam format HTML
    echo '<main class="total">';
    echo '<hr />';
    echo '<section class="hasil">';
    echo '<div><p>Batas Daya</p><p style="color: black;">' . htmlspecialchars($batasDaya) . ' VA</p></div>';
    echo '<div><p>Harga Beli</p><p style="color: black;">Rp ' . number_format($hargaBeli, 0, ',', '.') . '</p></div>';
    echo '<div><p>Biaya Materai</p><p style="color: black;">Rp ' . number_format($biayaMaterai, 0, ',', '.') . '</p></div>';
    echo '<div><p>Biaya Administrasi</p><p style="color: black;">Rp ' . number_format(BIAYA_ADMINISTRASI, 0, ',', '.') . '</p></div>';
    echo '<div><p>Sisa Harga Beli</p><p style="color: black;">Rp ' . number_format($sisaHargaBeli, 0, ',', '.') . '</p></div>';
    echo '<div><p>Pajak Penerangan Jalan (PPJ)</p><p style="color: black;">Rp ' . number_format($pajakPeneranganJalan, 0, ',', '.') . '</p></div>';
    echo '</section>';
    echo '<hr />';
    echo '<div class="total-biaya">';
    echo '<p>Total Harga</p>';
    echo '<h2>Rp ' . number_format($totalHarga, 0, ',', '.') . '</h2>';
    echo '<p>Total KWH</p>';
    echo '<h2>' . number_format($totalKWH, 2, ',', '.') . ' kWh</h2>';
    echo '</div>';
    echo '</main>';
}
