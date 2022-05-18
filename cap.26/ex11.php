<?php

// Cap 26. 26.5.11

// “Write a PHP script that calculates and displays the sum of the
// following:
// S = 1 + 2 + 4 + 7 + 11 + 16 + 22 + 29 + 37 + … + 191”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

$iSum = 0;
$i = 1;
$counter = 0; 

while($i <= 191) {
    $iSum += $i;
    $counter++;
    $i += $counter;
}

echo $iSum, "\n"; 
?>