<?php

// Cap. 26.5.17
//“... write the corresponding PHP script that prompts the user to enter two integers into variables $start and $finish
// and then displays all integers from $start to $finish that are multiples of five. However, at the beginning the script
// must check if variable $start is bigger than variable $finish . If this happens, the script must swap their values so
// that they are always in the proper order.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input /- prompt the user to enter 2 integers for the start and finish
echo "Enter a value for Start: \n";
$iStart = trim (fgets (STDIN));
echo "Enter a value for Finish: \n";
$iFinish = trim (fgets (STDIN));
$iTemp = 0;

if($iStart > $iFinish) {
    $iTemp = $iStart;
    $iStart = $iFinish;
    $iFinish = $iTemp;
}

for($i = $iStart; $i <= $iFinish; $i++) {
    if($i % 5 == 0) {
        echo $i, "\n";
    }
}
