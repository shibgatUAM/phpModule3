<?php

$studentGrades = [
    ['Math' => 85, 'English' => 90, 'Science' => 78],
    ['Math' => 92, 'English' => 88, 'Science' => 95],
    ['Math' => 78, 'English' => 85, 'Science' => 89]
];

function averageGrades($grades) {
    $studentNumber = 1;
   
    foreach($grades as $student) {
        $total = 0;
        $subjectCount = 0;

        foreach($student as $subject => $grades) {
            $total += $grades;
            $subjectCount++;
        }

        $average = $total / $subjectCount;
        echo "Student{$studentNumber}-Average Grade : ". number_format($average, 2) ."\n";
        $studentNumber++;
    }
}

averageGrades($studentGrades);