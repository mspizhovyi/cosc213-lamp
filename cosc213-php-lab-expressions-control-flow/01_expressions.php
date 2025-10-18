<?php
// Note:Detect output mode: CLI = "\n", Browser = "<br>"
$break = (php_sapi_name() === 'cli') ? "\n" : "<br>";

// Example variables
$a = 10; $b = 3;
$sum = $a + $b;
$prod = $a * $b;
$a +=5;

// 1) Arithmetic & assignment
echo "sum=$sum prod=$prod a=$a $break";

// 2) Precedence & parentheses
echo 2 + 3 * 4, $break;         
echo (2 + 3) * 4, $break;       

// Experimented
// echo "5cats" + 1;   // 6
// echo "10dogs" * 2;  // 20
// echo "cats5" + 1;   // 1 (because "cats" at the start = no number, so it's 0 + 1)
// echo "3.14pi" + 1;  // 4.14 (decimal works too)

// 3) String concatenation vs interpolation
$name = "Ada";
echo "Hello $name$break";         
echo 'Hello ' . $name . $break; 

// 4) Logical
$age = 19; $hasId = true;
if ($age >= 19 && $hasId) echo "Entry allowed$break";

// 5) Ternary & null-coalescing
if (php_sapi_name() === 'cli') {
    $score = $argv[1] ?? null;   
} else {
    $score = $_GET['score'] ?? null; 
}

$label = ($score !== null && $score >= 50) ? 'Pass' : 'Fail/NoScore';
echo "Result: $label$break";
