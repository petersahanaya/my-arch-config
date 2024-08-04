<?php
function calculateGrade(Type $type)
{
    $nilaiKog = ($tugasKog + $ulanganKog) + (2 * $uts) + (2 * $uas);
    $nilaiKet = ($tugasKet + $ulanganKet) + (2 * $uts) + (2 * $uas);
    $nilaiAkhir = ($nilaiKog + $nilaiKet) / 2;

    switch ($type) {
        case $type::NILAI_KOG:
            return validateGrade($nilaiKog);
            break;
        case $type::NILAI_KET:
            return validateGrade($nilaiKet);
            break;
        case $type::NILAI_AKHIR:
            return validateGrade($nilaiAkhir);
            break;
    }
}
?>

<section class="output">
    <header>
        <h3>Matkul</h3>
        <h3>Tugas Kognitif</h3>
        <h3>Tugas Keterampilan</h3>
        <h3>Ulangan Kognitif</h3>
        <h3>Ulangan Keterampilan</h3>
        <h3>UTS</h3>
        <h3>UAS</h3>
    </header>

    <main class="list">
        <p>
            <?= $_POST["matkul"]; ?>
        </p>
        <p>
            <?= $_POST["tugas-kognitif"]; ?>
        </p>
        <p>
            <?= $_POST["tugas-keterampilan"]; ?>
        </p>
        <p>
            <?= $_POST["ulangan-kognitif"]; ?>
        </p>
        <p>
            <?= $_POST["ulangan-keterampilan"]; ?>
        </p>
        <p>
            <?= $_POST["uts"]; ?>
        </p>
        <p>
            <?= $_POST["uas"]; ?>
        </p>
    </main>

    <footer class="grades">
        <div class="nilai-kog">
            <h2>Cognitive Score</h2>

            <h2 class="value-grade">
                <?php
                echo $calculateGrade(Type::NILAI_KOG);
                ?>
            </h2>
        </div>
        <div class="nilai-ket">
            <h2>Skill Score</h2>

            <h2 class="value-grade">
                <?php echo $calculateGrade(Type::NILAI_KET) ?>
            </h2>
        </div>

        <div class="grade">
            <h2>Grade</h2>

            <h2 class="value-grade">
                <?php echo $calculateGrade(Type::NILAI_AKHIR) ?>
            </h2>
        </div>
    </footer>
</section>