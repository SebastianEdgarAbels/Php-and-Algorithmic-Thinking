<?php
// Cap 26. 26.5.8

// “Write a PHP script that prompts the user to enter a number in 
// degrees and then calculates and displays the cosine of all 
// numbers from 0 to that given number, using a step of 1. It is 
// given that 2π = 360°.”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

// Data input - prompts the user to enter a umber in degrees
echo "Enter a number in degrees: ";
$iNr = trim (fgets (STDIN));

// Data processing
for ($i=0; $i<=$iNr; $i++) {
    echo cos($i * pi()/180), "\n";
}

?>