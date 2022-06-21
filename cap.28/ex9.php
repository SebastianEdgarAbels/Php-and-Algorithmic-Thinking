<?php

// Cap. 28.10.9

//“Write a PHP script that displays the multiplication table for pairs of integers between 1 and 12, as shown next.
// Please note that the output is aligned with tabs.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

for($i = 1; $i <= 12; $i++) {
    for($j = 1; $j <= 12; $j++) {
        echo $i * $j, "\t";
    }
    echo "\n";
}