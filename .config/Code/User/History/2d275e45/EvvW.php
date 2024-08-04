<?php
enum Type: int
{
    case NILAI_KOG = 0;
    case NILAI_KET = 1;
    case NILAI_AKHIR = 2;
}

class Grade
{
    public function __construct(public string $grade, public int $min, public int $max)
    {
        $this->grade = $grade;
        $this->min = $min;
        $this->max = $max;
    }
}

$GRADE_RANGES = [
    new Grade("A", 80, 100),
    new Grade("B", 70, 79),
    new Grade("A", 60, 69),
    new Grade("A", 50, 59),
    new Grade("A", 0, 49),
];

function validateGrade(int $score): string
{
    $finalResult = "A";
    global $GRADE_RANGES;

    foreach ($GRADE_RANGES as $grade) {
        if ($score >= $grade->min && $score <= $grade->max) {
            print_r("TRUE GES");
            $finalResult = $grade->grade;
            break;
        }
    }

    return $finalResult;
}

function calculateGrade(Type $type)
{
    global $formData;

    $nilaiKog = ($formData["tugas-kognitif"] + $formData["ulangan-kognitif"]) + (2 * $formData["uts"]) + (2 * $formData["uas"]) / 6;
    $nilaiKet =  ($formData["tugas-keterampilan"] + $formData["ulangan-keterampilan"]) + (2 * $formData["uts"]) + (2 * $formData["uas"]) / 6;
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
        default:
            return "KOSONG";
            break;
    }
}
