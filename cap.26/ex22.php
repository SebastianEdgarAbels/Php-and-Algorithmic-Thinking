<?php

// Cap. 26.5.22

//“Write a PHP script that prompts the user to enter a message and then counts and displays the number of vowels, the
// number of consonants, and the number of arithmetic characters the message contains.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

echo "Enter a message: \n";
$message = strtoupper (trim (fgets (STDIN)));

$vowels = "AEIOU";
$consonants = "BCDFGHJKLMNPQRSTVWZYX";
$digits = "0123456789";
$countV = 0;
$countC = 0;
$countD = 0;

for ($i = 0; $i <= strlen($message) - 1; $i++) {
    $char = $message[$i];
    switch ($char) {
        case (strpos($vowels, $char) !== false):
            $countV++;
            break;
        case (strpos($consonants, $char) !== false):
            $countC++;
            break;
        case (strpos($digits, $char) !== false):
            $countD++;
            break;
    }
}

echo "The number of vowels found in your message are: " . $countV, "\n";
echo "The number of consonants found in your message are: " . $countC, "\n";
echo "The number of digits found in your message are: " . $countD, "\n";