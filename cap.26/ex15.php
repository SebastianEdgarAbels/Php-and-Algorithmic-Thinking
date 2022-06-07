<?php

// Cap 26. 26.5.15
//“...write the corresponding PHP script that prompts the user to enter 50 integers and then
// calculates and displays the average value of those that are odd and the average value of those that are even.

//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to
// Think Like a Programmer”. Apple Books.


$iSumOdd = 0;
$iSumEven = 0;
$iCountOdd = 0;
$iCountEven = 0;

for($i=1; $i<=8; $i++) {
    // Data input - prompt the user to enter an integer
    echo "Enter an integer: \n";
    $iX = trim (fgets (STDIN));

    // Check if the users' inserted number is even or odd
    if($iX % 2 == 0) {
        $iSumEven += $iX;
        $iCountEven += 1;
    }
    else {
        $iSumOdd += $iX;
        $iCountOdd += 1;
    }
}

if($iCountEven > 0) {
    echo $iSumEven/$iCountEven, "\n";
}
if($iCountOdd > 0) {
    echo $iSumOdd/$iCountOdd, "\n";
}