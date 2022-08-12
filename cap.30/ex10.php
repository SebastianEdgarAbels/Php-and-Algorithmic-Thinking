<?php

// Cap. 30.8-10
//“Write a PHP script that displays all possible integer values of x , y , and z within the range −10 to +10 that validate the following formula:
//” (x + y) / 2 + (3 * z ** 2) / (x + 3 * y + 45) = x/3;
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

for($x = -10; $x <= 10; $x++) {
    for($y = -10; $y <= 10; $y++) {
        for($z = -10; $z <= 10; $z++) {
            if(($x + $y) / 2 + 3 * $z ** 2 / ($x + 3 * $y + 45) == $x/3) {
                echo $x, ", ", $y, ", ", $z, "\n";
            }
        }
    }
}