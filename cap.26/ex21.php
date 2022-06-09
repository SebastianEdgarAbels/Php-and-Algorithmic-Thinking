<?php

// Cap. 26.5.21

//“Write a PHP script that prompts the user to enter a message and then counts and displays the number of consonants
// the message contains.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

echo "Enter a message: \n";
$message = trim (fgets (STDIN));
$count = 0;
$countConsonants = 0;


for($i = 0;$i <= strlen($message) - 1; $i++) {
    $char = $message[$i];
    switch($char) {
        case (" "):
            $count++;
            break;
        case ("a"):
        case ("e"):
        case ("i"):
        case ("o"):
        case ("u"):
            $countConsonants++;
            break;
    }
}

$total = strlen($message) - $count - $countConsonants;

echo "The total number of consonants in the message is :" . $total, "\n";

#######################
/* Author's solution */
#######################
//$consonants = "BCDFGHJKLMNPQRSTVWZYX";
//echo "Enter an English message: "; $message = strtoupper(trim(fgets(STDIN)));
//$count = 0;
//for ($i = 0; $i <= strlen($message) - 1; $i++) {
//    $character = $message[$i];
//    if (strpos($consonants, $character) !== false) { //If character is found in consonants
//        $count++;
//    } }
//echo "Consonants: ", $count, "\n";