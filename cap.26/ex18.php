<?php

// Cap. 26.5.18

//“Write a PHP script that prompts the user to enter a real and an integer and then displays the result of the first
// number raised to the power of the second number, without using either the exponentiation operator ( ** ) or the
// built-in pow() function of PHP.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input - prompt the user to enter a real and an integer
echo "Enter a real: \n";
$iReal = trim (fgets (STDIN));
echo "Enter an integer: \n";
$iInt = trim (fgets (STDIN));
$iTotal = 1;

// so if I can't use the ** or the pow() function then the only way is with a loop and to create a var for the res to multiply with the $iReal for each iteration
for($i=1; $i<=$iInt; $i++) {
    $iTotal *= $iReal;
}
// hier I check if the $iInt is negative then the $iTotal should be a 1/$iTotal
if($iInt < 0) {
    $iTotal = 1/$iTotal;
}

echo $iTotal, "\n";