<?php

// Cap. 26.5.20

//“Write a PHP script that prompts the user to enter a message and then displays the average number of letters in each
// word. For example, if the message entered is “My name is Aphrodite Bouras”, the script must display “The average
// number of letters in each word is 4.4”. Space characters must not be counted.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input - prompt the user to enter a message
echo "Enter a message: \n";
$Message = trim (fgets (STDIN));
$TotalChars = strlen($Message);
$count = 0;

// the strlen() function doesn't start from 0 but from 1
for($i = 0; $i <= $TotalChars - 1; $i++) {
    $char = $Message[$i];

    //hier will be every space between words counted, talking into consideration that only one space exists between them
    if($char == ' ') {
        $count++;
    }
}

// because starts from the first space before the second word, we should take into consideration the first word also
$words = $count + 1;
echo "The average number of letters in each word is ";
echo ($TotalChars - $count) / $words, " \n";

