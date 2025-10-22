<?php

// Write a function greet() that prints "Hello, World!". Call it twice.
function greet() {
    echo "Hello, World!<br>";
}
greet();
greet();

// Write greetName($name) that prints "Hello, NAME!". Call it with "Alice" and "Bob".
function greetName($name) {
    echo "Hello, $name!<br>";
}
greetName("Alice");
greetName("Bob");


// Write add($a, $b) that returns the sum. Call it with (3, 5) and (10, 20).
function add($a, $b) {
    return $a + $b;
}
echo add(3, 5) . "<br>";
echo add(10, 20) . "<br>";


// Write convertCtoF($c) that converts Celsius to Fahrenheit. Test with 0, 30, 100.
function convertCtoF($c) {
    return ($c * 9 / 5) + 32;
}
echo convertCtoF(0) . "<br>";
echo convertCtoF(30) . "<br>";
echo convertCtoF(100) . "<br>";


// Write safeDivide($a, $b) that returns the result or "Error" if dividing by zero.
function safeDivide($a, $b) {
    if ($b == 0) return "Error";
    return $a / $b;
}
echo safeDivide(10, 2) . "<br>";
echo safeDivide(5, 0) . "<br>";
?>
