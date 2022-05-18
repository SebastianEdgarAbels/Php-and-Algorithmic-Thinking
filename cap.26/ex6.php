<?php

// Cap 26. 26.5.6

// “...write the corresponding PHP script that 
// prompts the user to enter 20 numbers and then calculates and 
// displays their product and their average value.”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

$iTotal = 0;
$iProduct = 1;

for ($i=0; $i <= 20; $i++) {
    echo "Enter a number: ";
    $iNr = trim (fgets (STDIN));
    $iProduct *= $iNr; 
    $iTotal += $iNr;
}
echo "The product of your numbers is: " . $iProduct . " and the average is: "
    . $iTotal/20, "\n"; 

    ?>