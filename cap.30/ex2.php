<?php

// Cap 30.8-2
//“Write a PHP script that prompts the user to enter an integer between 1 and 20 and then displays all four-digit integers
// for which the sum of their digits is less than the integer given. For example, if the user enters 15, the value 9301
// is such a number, since
//9 + 3 + 0 + 1 < 15”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

// Data input - prompt the user to enter an integer between 1 and 20
echo "Enter a number between 1 and 20: \n";
$nr = trim (fgets (STDIN));

//for($i = 1000; $i <= 9999; $i++) {
//    $d4 = $i % 10;
//    $r = (int)($i/10);
//    $d3 = $r % 10;
//    $r = (int)($r/10);
//    $d2 = $r % 10;
//    $d1 = (int)($r/10);
//    if($d4 + $d3 + $d2 + $d1 < $nr)
//        echo $d4, $d3, $d2, $d1, "\n";
//}

// with for loops
for($d1 = 1; $d1 <= 9; $d1++) {
    for($d2 = 0; $d2 < 9; $d2++) {
        for($d3 = 0; $d3 <= 9; $d3++) {
            for($d4 = 0; $d4 <= 9; $d4++) {
                if($d1 + $d2 + $d3 + $d4 < $nr) {
                    echo $d1 * 1000 + $d2 * 100 + $d3 * 10 + $d4, "\n";
                }
            }
        }
    }
}