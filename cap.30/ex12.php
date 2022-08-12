<?php

// Cap. 30.8-12
//“Rewrite the PHP script of Exercise 30.4-4 to validate the data input using a loop control structure. If the user enters a non-positive integer, an error message must be displayed.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

echo "Enter a positive integer: \n";
$x = trim (fgets (STDIN));

while ($x < 0) {
    echo "Invalid number! You entered e negative integer. Enter a positive number: \n";
    $x = trim (fgets (STDIN));
}

$nr_of_div = 2;
for($i = 2; $i <= (int)($x / 2); $i++) {
    if($x % $i == 0) {
        $nr_of_div++;
    }
}

echo $nr_of_div, "\n";