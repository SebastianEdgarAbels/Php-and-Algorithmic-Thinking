<?php

// Cap. 28.10.8

// “Write a PHP script that displays every combination of two integers as well as their resulting product, for pairs of
// integers between 1 and 4. The output must display as follows.
//1 x 1 = 1
//1 x 2 = 2
//1 x 3 = 3
//1 x 4 = 4
//2 x 1 = 2
//2 x 2 = 4
//2 x 3 = 6
//2 x 4 = 8
//…
//…
//4 x 1 = 4
//4 x 2 = 8
//4 x 3 = 12
//4 x 4 = 16”
//
// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

for($i = 1; $i <= 4; $i++) {
    for($j =  1; $j <= 4; $j++) {
        echo $i . " * " . $j . " = " . $i * $j, "\n";
    }
}