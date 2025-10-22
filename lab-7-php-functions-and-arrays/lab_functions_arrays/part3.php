<?php
// Write average($grades) that returns the average of an array.
function average($grades) {
    return array_sum($grades) / count($grades);
}
echo average([80, 90, 100]) . "<br>";

// Write letterGrade($score) that returns A/B/C/D/F.
function letterGrade($score) {
    if ($score >= 90) return "A";
    elseif ($score >= 80) return "B";
    elseif ($score >= 70) return "C";
    elseif ($score >= 60) return "D";
    else return "F";
}
echo letterGrade(95) . "<br>";
echo letterGrade(72) . "<br>";
echo letterGrade(50) . "<br>";

// Create an associative array of students with scores. Use average() to find class average. Use letterGrade() to assign each student a grade.
$students = ["Alice" => 92, "Bob" => 76, "Charlie" => 85, "Diana" => 67];
foreach ($students as $name => $score) {
    echo "$name: " . letterGrade($score) . "<br>";
}
echo "Class average: " . average(array_values($students)) . "<br>";
?>
