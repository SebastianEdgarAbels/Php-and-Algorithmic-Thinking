<?php

// Cap. 28.10.3

// “Write a PHP script that prompts the user to enter a sentence. The script then displays the message “The sentence
// contains a number” if the sentence contains at least one number. The script must stop searching further when it finds
// at least one digit.”
//
// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Sunt perfect sanatos 7, sclipitor si super destept!

$nr = false;
$numbers = "0123456789";


while($nr != true) {
    // Data input - prompt the user to enter a sentence
    echo "Enter a sentence: ";
    $sentence = trim (fgets (STDIN));
    for($i = 0; $i <= strlen($sentence) - 1; $i++) {
        $char = $sentence[$i];
        if(strpos($numbers, $char) !== false) {
            $nr = true;
            break;
        }
    }
}

echo "The sentence contains a number\n";


