<?php

// Cap 26. 26.5.10

// “Write a PHP script that lets the user enter an integer N and 
// then calculates and displays the product of the following:
// P = 2**1 × 4**3 × 6**5 × … × 2N**(N−1)”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

// Data input - prompt the user to enter an integer
echo "Enter an integer: ";
$iN = trim (fgets (STDN));
$iProduct = 1;

// Data processing
for ($i = 2; $i <= 2*$iN; $i+=2) {
    $iProduct = $iProduct * $i ** ($i-1);
}

// Results output - display the result on user's display
echo $iProduct, "\n";

?>