<?php

// Cap 26. 26.5.9

// “Write a PHP script that calculates and displays the sum of the 
// following:
// S = 1 + 3 + 5 + … + 99”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

$iSum = 0;

for ($i=1; $i<=99; $i+=2) {
    $iSum += $i;
}

echo $iSum, "\n";
?>