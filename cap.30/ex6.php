<?php

// Cap. 30.8-6

//“Using a loop control structure, write the code fragment that validates data input, forcing the user to enter a valid
//gender (M for Male, F for Female). Moreover, it must validate correctly both for lowercase and uppercase letters.”
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

echo "Enter a gender: \n";
$gender = strtoupper(trim (fgets (STDIN)));

while ($gender != "M" && $gender != "F") {
    echo "Error, you should enter m/M or f/F, \n";
    $gender = strtoupper(trim (fgets (STDIN)));
}

do {
    $gender = strtoupper(trim (fgets (STDIN)));
} while ($gender != "M" && $gender != "F");