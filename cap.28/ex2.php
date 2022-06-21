<?php

// Cap. 28.10.2

//“Write a PHP script that prompts the user to enter some text. The text can be either a single word or a whole sentence.
// Then, the script must display a message stating whether the given text is one single word or a complete sentence.
// Hint: Search for a space character! If a space character is found, it means that the user entered a sentence. The
// script must stop searching further when it finds at least one space character.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input - prompt the user to enter some text
echo "Enter a some text (a single word or a whole sentence): ";
$sentence = trim (fgets (STDIN));
$found = false;


#### With Decision Control Structure / Verschachtelung ####
// $pos = strpos($sentence, " ");
//if ($pos !== true) {
//    echo "The given text is a single word.\n";
//}
//else {
//    echo "The given text is a text.\n";
//}

for ($i = 0; $i <= strlen($sentence) - 1; $i++) {
    $pos = $sentence[$i];
    if($pos == " ") {
        $found = true;
    }
}

if(!$found){
    echo "The given text is a single word.\n";
}
else {
    echo "The given text is a text.\n";
}
