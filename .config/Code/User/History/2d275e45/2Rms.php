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
