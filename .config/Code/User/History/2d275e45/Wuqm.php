<?php

enum Type
{
    case NILAI_KOG;
    case NILAI_KET;
    case NILAI_AKHIR;
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
    $finalResult = "";
    global $GRADE_RANGES;

    foreach ($GRADE_RANGES as $grade) {
        if ($score >= $grade->min && $score <= $grade->max) {
            $finalResult = $grade->grade;
            break;
        }
    }

    return $finalResult;
}


/*const calculateGrades = (type) => {
  const nilaiKog = ((tugasKog.valueAsNumber + ulanganKog.valueAsNumber) + (2 * uts.valueAsNumber) + (2 * uas.valueAsNumber)) / 6; // Corrected formula
  const nilaiKet = ((tugasKet.valueAsNumber + ulanganKet.valueAsNumber) + (2 * uts.valueAsNumber) + (2 * uas.valueAsNumber)) / 6; // Corrected formula
  const nilaiAkhir = (nilaiKog + nilaiKet) / 2;
  switch (type) {
    case NILAI_KOG:
      return validateGrade(nilaiKog)
    case NILAI_KET:
      return validateGrade(nilaiKet)
    case NILAI_AKHIR:
      return validateGrade(nilaiAkhir)
  }
}*/

function calculateGrade(Type $type, int $tugasKog, int $ulanganKog, int $tugasKet, int $ulanganKet, int $uts, int $uas)
{
    $nilaiKog = tugasKog

}
