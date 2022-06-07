<?php

// Cap. 26.5.16
//“...write the corresponding PHP script that prompts the user to enter two integers into variables $start and $finish
// and then displays all integers from $start to $finish . However, at the beginning the script must check if variable
// $start is bigger than variable $finish . If this happens, the script must swap their values so that they are always
// in the proper order.”
//
// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to
// Think Like a Programmer”. Apple Books.

// Data input - prompt the user to enter an integer for start and an integer for finish
echo "Enter an integer for the start: \n";
$iStart = trim (fgets (STDIN));
echo "Enter an integer for the finish: \n";
$iFinish = trim (fgets (STDIN));
$iTemp = 0;

if($iStart > $iFinish) {
    $iTemp = $iStart;
    $iStart = $iFinish;
    $iFinish = $iTemp;
}



for($i=$iStart; $i<=$iFinish; $i++) {
    echo $i, "\n";
}

