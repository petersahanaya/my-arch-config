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
    $sisaHargaBeli = $hargaBeli - BIAYA_ADMINISTRASI - $biayaMaterai;

    //Pajak Penerangan Jalan - (Sisa Harga Beli * 10 % atau 0.10)
    $pajakPeneranganJalan = $sisaHargaBeli * 0.10;

    //Total Harga - (Sisa Harga Beli + Pajak Penerangan Jalan)
    $totalHarga = $sisaHargaBeli + $pajakPeneranganJalan;

    switch ($batasDaya) {
        case BatasDaya::EMPAT_RATUS_LIMA_PULUH->value:

            break;
        case BatasDaya::SEMBILAN_RATUS->value:
            break;
    }
}
