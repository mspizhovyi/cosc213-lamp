<?php
// Create an array with 5 numbers. Print the largest and smallest number.
$numbers = [12, 45, 7, 89, 23];
echo max($numbers) . "<br>";
echo min($numbers) . "<br>";

// Create an array of 3 students with grades. Print each student and their grade.
$students = ["Alice" => 90, "Bob" => 82, "Charlie" => 76];
foreach ($students as $name => $grade) {
    echo "$name: $grade<br>";
}

// Start with [1, 2, 3]. Use array_push to add 4. Use array_pop to remove the last element. Merge with [5, 6].
$arr = [1, 2, 3];
array_push($arr, 4);
array_pop($arr);
$merged = array_merge($arr, [5, 6]);
print_r($merged);
echo "<br>";

// Given [90, 80, 90, 70, 80], use array_count_values() to count occurrences.
$grades = [90, 80, 90, 70, 80];
print_r(array_count_values($grades));
?>
