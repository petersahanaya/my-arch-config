<?php
//ENUM - BATAS DAYA
enum BatasDaya: string
{
    case SEMBILAN_RATUS = "900";
    case EMPAT_RATUS_LIMA_PULUH = "450";
}

//REQUEST METHOD
$method = $_SERVER["REQUEST_METHOD"];

//CONSTANT - BIAYA ADMINISTRASI
const BIAYA_ADMINISTRASI = 3000;

//CONSTANT - BIAYA ABODEMEN
const BIAYA_ABODEMEN_900 = 20_000;
const BIAYA_ABODEMEN_450 = 11_000;

//CONSTANT 450 - BATAS BLOK
const BATAS_BLOK_SATU_450 = 30;
const BATAS_BLOK_DUA_450 = 30;
const BATAS_BLOK_TIGA_450 = 57_3;

//CONSTANT 450 - TARIF
const TARIF_BLOK_SATU_450 = 169;
const TARIF_BLOK_DUA_450 = 360;
const TARIF_BLOK_TIGA_450 = 495;

//CONSTANT 900 - BATAS BLOK
const BATAS_BLOK_SATU_900 = 20;
const BATAS_BLOK_DUA_900 = 40;
const BATAS_BLOK_TIGA_900 = 57_3;

//CONSTANT 900 - TARIF
const TARIF_BLOK_SATU_900 = 275;
const TARIF_BLOK_DUA_900 = 445;
const TARIF_BLOK_TIGA_900 = 495;


//CONDITION
if ($method === "POST") {
    //INPUTS
    $batasDaya = $_POST["batas-daya"];
    $hargaBeli = $_POST["harga-beli"];
    $biayaMaterai = $_POST["materai"];

    //Sisa Harga Beli - (Harga Beli - Biaya Administrasi - Biaya Materai)
    $sisaHargaBeli = $hargaBeli - BIAYA_ADMINISTRASI - $biayaMaterai;

    //Pajak Penerangan Jalan - (Sisa Harga Beli * 10 % atau 0.10)
    $pajakPeneranganJalan = $sisaHargaBeli * 0.10;


    //Biaya Pemakaian Blok - (Batas Blok n * Tarif / Blok n)

    //Total Biaya Semua Blok

    //Pajak Penerangan Jalan - (10% atau 0.10 dari total semua blok)

    //Total Harus DiBayar - (Total Biaya Semua Blok + Pajak + Biaya Administrasi + Materai)

    switch ($batasDaya) {
        case BatasDaya::EMPAT_RATUS_LIMA_PULUH->value:
            $biayaBeban = (int)$batasDaya / 1000 * BIAYA_ABODEMEN_450;

            //Biaya Pemakaian Blog - 450
            $biayaPemakaianBlokSatu_450 = BATAS_BLOK_SATU_450 * TARIF_BLOK_SATU_450;

            $biayaPemakaianBlokDua_450 = BATAS_BLOK_DUA_450 * TARIF_BLOK_DUA_450;

            $biayaPemakaianBlokTiga_450 = BATAS_BLOK_TIGA_450 * TARIF_BLOK_TIGA_450;

            //Total Semua Blok
            $totalBiayaSemuaBlok = $biayaPemakaianBlokSatu_450 + $biayaPemakaianBlokDua_450 + $biayaPemakaianBlokTiga_450;

            //Pajak
            $pajak = $totalBiayaSemuaBlok * 0.10;

            //Total Harus Dibayar
            $totalAkhir = $totalBiayaSemuaBlok + $pajak + BIAYA_ADMINISTRASI + (int)$biayaMaterai;

            // Menampilkan hasil

            echo '<main class="total">';
            echo '<hr />';
            echo '<section class="hasil">';
            echo '<div><p>Pemakaian kWh</p><p style="color: black;">' . $pemakaianKwh . ' kWh</p></div>';
            echo '<div><p>Biaya Beban</p><p style="color: black;">Rp ' . number_format($biayaBeban, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok I</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokSatu_450, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok II</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokDua_450, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok III</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokTiga_450, 0, ',', '.') . '</p></div>';
            echo '</section>';
            echo '<hr />';

            echo '<div class="total-biaya">';
            echo '<p>Total Biaya Pemakaian Semua Blok</p>';
            echo '<h2>Rp ' . number_format($totalBiayaSemuaBlok, 0, ',', '.') . '</h2>';
            echo '<p>Pajak Penerangan Jalan (PPJ)</p>';
            echo '<h2>Rp ' . number_format($pajak, 0, ',', '.') . '</h2>';
            echo '<p>Total yang harus dibayar</p>';
            echo '<h2>Rp ' . number_format($totalAkhir, 0, ',', '.') . '</h2>';
            echo "</dev>";
            echo '</main>';
            break;
        case BatasDaya::SEMBILAN_RATUS->value:
            $biayaBeban = (int)$batasDaya / 1000 * BIAYA_ABODEMEN_900;

            // Biaya Pemakaian Blok - 900
            $biayaPemakaianBlokSatu_900 = BATAS_BLOK_SATU_900 * TARIF_BLOK_SATU_900;
            $biayaPemakaianBlokDua_900 = BATAS_BLOK_DUA_900 * TARIF_BLOK_DUA_900;
            $biayaPemakaianBlokTiga_900 = BATAS_BLOK_TIGA_900 * TARIF_BLOK_TIGA_900;

            // Total Semua Blok
            $totalBiayaSemuaBlok = $biayaPemakaianBlokSatu_900 + $biayaPemakaianBlokDua_900 + $biayaPemakaianBlokTiga_900;

            // Pajak
            $pajak = $totalBiayaSemuaBlok * 0.10;

            // Total Harus Dibayar
            $totalAkhir = $totalBiayaSemuaBlok + $pajak + BIAYA_ADMINISTRASI + $biayaMaterai;

            // Menampilkan hasil dalam format HTML
            echo '<main class="total">';
            echo '<hr />';
            echo '<section class="hasil">';
            echo '<div><p>Pemakaian kWh</p><p style="color: black;">' . $pemakaianKwh . ' kWh</p></div>';
            echo '<div><p>Biaya Beban</p><p style="color: black;">Rp ' . number_format($biayaBeban, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok I</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokSatu_900, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok II</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokDua_900, 0, ',', '.') . '</p></div>';
            echo '<div><p>Biaya Pemakaian Blok III</p><p style="color: black;">Rp ' . number_format($biayaPemakaianBlokTiga_900, 0, ',', '.') . '</p></div>';
            echo '</section>';
            echo '<hr />';
            echo '<div class="total-biaya">';
            echo '<p>Total Biaya Pemakaian Semua Blok</p>';
            echo '<h2>Rp ' . number_format($totalBiayaSemuaBlok, 0, ',', '.') . '</h2>';
            echo '<p>Pajak Penerangan Jalan (PPJ)</p>';
            echo '<h2>Rp ' . number_format($pajak, 0, ',', '.') . '</h2>';
            echo '<p>Total yang harus dibayar</p>';
            echo '<h2>Rp ' . number_format($totalAkhir, 0, ',', '.') . '</h2>';
            echo '</div>';
            echo '</main>';
            break;
    }
}
