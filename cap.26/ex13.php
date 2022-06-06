<?php

// Cap 26. 26.5.13

// “... write the corresponding PHP script that prompts the user 
// to enter 30 four-digit integers and then calculates and displays
// the sum of those with a first digit of 5 and a last digit of 3. 
// For example, values 5003, 5923, and 5553 are all such integers.”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

$iSume = 0;

for($i=1; $i <= 3; $i++) {
    // Data input - prompt the user to enter a four digit integer
    echo "Enter a four digit integer: \n";
    $iX = trim (fgets (STDIN));
    echo $iX, "\n";

    // Extract the first and the fourth digit
    $iDigit1 = (int)($iX/1000);
    $iDigit4 = $iX % 10;

    // Check if the first digit is 5 and the last one is 3
    if($iDigit1 == 5 &&  $iDigit4 == 3) {
        $iSume = $iSume + $iX;
    } 
    
}
// Result output - display the Sume on user's display
echo "The Total sume of numbers containing 5 for the first digit and 3 for the last digit is: " .
$iSume, "\n"; 