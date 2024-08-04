<?php include "../function.php"; ?>


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
                <?= $calculateGrade($type::NILAI_KOG, $_POST["matkul"], $_POST["tugas-kogtinif"], $_POST["tugas-keterampilan"], $_POST["ulangan-kognitif"], $_POST["ulangan-keterampilan"], $_POST["uts"], $_POST["uas"]) ?>
            </h2>
        </div>
        <div class="nilai-ket">
            <h2>Skill Score</h2>

            <h2 class="value-grade">
                <?= $calculateGrade($type::NILAI_KET, $_POST["matkul"], $_POST["tugas-kogtinif"], $_POST["tugas-keterampilan"], $_POST["ulangan-kognitif"], $_POST["ulangan-keterampilan"], $_POST["uts"], $_POST["uas"]) ?>
            </h2>
        </div>

        <div class="grade">
            <h2>Grade</h2>

            <h2 class="value-grade">
                <?= $calculateGrade($type::NILAI_AKHIR, $_POST["matkul"], $_POST["tugas-kogtinif"], $_POST["tugas-keterampilan"], $_POST["ulangan-kognitif"], $_POST["ulangan-keterampilan"], $_POST["uts"], $_POST["uas"]) ?>
            </h2>
        </div>
    </footer>
</section>