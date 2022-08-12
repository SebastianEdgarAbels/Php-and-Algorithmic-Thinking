<?php

// Cap. 30.8-9
//“Write a PHP script that displays all possible integer values of x and y within the range −100 to +100 that validate
// the following formula:
//5x + 3y**2 = 0”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

for($x = -100; $x <= 100; $x++) {
    for($y = -100; $y <= 100; $y++) {
        if((5 * $x + 3 * $y ** 2) == 0) {
            echo $x, ", ",  $y, "\n";
        }
    }
}