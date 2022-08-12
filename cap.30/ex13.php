<?php

// Cap. 30.8-13
//“Rewrite the PHP script of Exercise 30.4-5 to validate the data input using a loop control structure. If the user
// enters an integer less than or equal to 1, an error message must be displayed”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

echo "Entere an integer greater then 1: ";
$x = trim (fgets (STDIN));

while ($x <= 1) {
    echo "Error you enter a number equal to 1 or less then 1. Entere an integer greater then 1: ";
    $x = trim (fgets (STDIN));
}

$nrOfDivisors = 2;
for ($i = 2; $i <= (int)($x / 2); $i++) {
    if ($x % $i == 0) {
        $nrOfDivisors++;
        break;
    }
}

if ($nrOfDivisors == 2) {
    echo "Number ", $x, " is prime\n";
}