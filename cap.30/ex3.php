<?php

// Cap. 30.8-3
//“Write a PHP script that displays all four-digit integers that satisfy all of the following conditions:
//► the number's first digit is greater than its second digit
//► the number's second digit is equal to its third digit
//► the number's third digit is smaller than its fourth digit
//For example, the values 7559, 3112, and 9889 are such numbers.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

// $d1 > $d2
// $d2 == $d3
// $d3 < $d4

//for($i=1000; $i <= 9999; $i++) {
//    $d4 = $i % 10;
//    $r = (int)($i / 10);
//    $d3 = $r % 10;
//    $r = (int)($r / 10);
//    $d2 = $r % 10;
//    $d1 = (int)($r / 10);
//    if($d1 > $d2 && $d2 == $d3 && $d3 < $d4) {
//        echo $i, "\n";
//    }
//}

for($d1 = 1; $d1 <= 9; $d1++) {
    for($d2 = 0; $d2 <= 9; $d2++) {
        for($d3 = 0; $d3 <= 9; $d3++) {
            for($d4 = 0; $d4 <= 9; $d4++) {
                if($d1 > $d2 && $d2 == $d3 && $d3 < $d4) {
                    echo $d1 * 1000 + $d2 * 100 + $d3 * 10 + $d4, "\n";
                }
            }
        }
    }
}
