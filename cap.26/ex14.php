<?php

// Cap 26. 26.5.14
//“...write the corresponding PHP script that prompts the user to enter N integers and then displays the total number of
//those that are even. The value of N must be given by the user at the beginning of the script. Moreover, if all integers
//given are odd, the message “You entered no even integers” must be displayed.”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a
//Programmer”.


// Data input - prompt the user to enter N Integers he wants to insert
echo "Enter the number of integers you want to insert: \n";
$iN = trim (fgets (STDIN));
$iCount = 0;

for($i=1; $i<=$iN; $i++) {
    // Data input - prompt the user to enter an integer
    echo "Enter an integer: \n";
    $iX = trim (fgets (STDIN));

    // Check if $iX is even
    if($iX % 2 == 0) {
        $iCount++;
    }
}
if($iCount > 0) {
    echo $iCount, "\n";
}
else {
    echo "You entered no even integers.\n";
}