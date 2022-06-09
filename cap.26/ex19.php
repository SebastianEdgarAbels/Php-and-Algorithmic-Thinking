<?php

// Cap. 26.5.19

//“Write a PHP script that prompts the user to enter a message and then displays the number of words it contains. For
// example, if the string entered is “My name is Bill Bouras”, the script must display “The message entered contains 5
// words”. Assume that the words are separated by a single space character.
//Hint: Use the strlen() function to get the number of characters that the given message contains."

//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to
// Think Like a Programmer”. Apple Books.

echo "Enter a message: \n";
$sMessage = trim (fgets (STDIN));
$count = 0;


for($i = 1; $i <= strlen($sMessage) - 1; $i++) {
    $char = $sMessage[$i];
    if($char == ' ') {
        $count++;
    }
}
echo "The message entered contains: " . $count . " words \n";


