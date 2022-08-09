<?php

// Cap. 30.8-4
// “Write a PHP script that prompts the user to enter an integer and then displays the number of its digits.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

//echo "Enter an integer: \n";
//$nr = (string)(trim( fgets(STDIN)));
//
//echo strlen($nr), "\n";

echo "Enter an integer: \n";
$nr = trim( fgets(STDIN));

$count = 0;

while ($nr != 0) {
    $nr = (int)($nr / 10);
    $count++;
}

echo $count, "\n";