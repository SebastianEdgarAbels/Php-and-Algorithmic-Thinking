<?php

// Cap. 27.5.5
//“Write a PHP script that displays an hours and minutes table in the following form.”
//“0 0
//0 1
//0 2
//0 3
//...
//0 59
//1 0
//1 1
//1 2
//1 3
//...
//23 59”

//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

for ($i = 0; $i <= 23; $i++) {
    for ($j = 0; $j <= 59; $j++) {
        echo $i . " " . $j, "\n";
    }
}