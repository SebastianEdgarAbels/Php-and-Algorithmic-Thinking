<?php

// Cap 30.8-1
//“... and write the corresponding PHP script that prompts the user to repeatedly enter non-negative values until their
// average value exceeds 3000. At the end, the script must display the total number of zeros entered.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”.

$count = 0;
$countZero = 0;
$total = 0;

do {
    echo "Enter a non-negative value: \n";
    $val = trim (fgets (STDIN));
    if($val == 0) {
        $countZero++;
    }
    $count++;
    $total += $val;
} while($total/$count <= 300);

echo $count, $countZero, "\n";