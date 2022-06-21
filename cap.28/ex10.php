<?php

// Cap. 28.10.10

//“Write a PHP script that prompts the user to enter an integer and then displays the multiplication table for pairs of
// integers between 1 and that integer. For example, if the user enters the value 5, the output must be as shown next.
// Please note that the output is aligned with tabs.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input
echo "Enter an integer: ";
$nr = trim (fgets (STDIN));

for($i = 1; $i <= $nr; $i++) {
    for($j = 1; $j <= $nr; $j++) {
        echo $i * $j, "\t";
    }
    echo "\n";
}