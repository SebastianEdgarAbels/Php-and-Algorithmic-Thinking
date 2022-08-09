<?php

// Cap. 30.8-7
//“Write a PHP script that prompts the user to enter a non-negative number and then calculates its square root. Using a
// loop control structure, the script must also validate data input and display an error message when the user enters any
// negative values. Additionally, the user has a maximum number of two retries. If the user enters more than three negative
// values, a message “Dude, you are dumb!” must be displayed and the script execution must end.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think Like a Programmer”. Apple Books.

echo "Enter a non-negative number: \n";
$nr = trim (fgets (STDIN));
$count = 0;
while ($nr < 0) {
    $count++;
    if ($count == 2) break;
    echo "Error! You inserted a negative value.\n";
    echo "Enter a non-negative number: \n";
    $nr = trim (fgets (STDIN));
}

if ($count >= 2) {
    echo "Dude you are dumb!\n";
}
else {
    echo sqrt($nr), "\n";
}