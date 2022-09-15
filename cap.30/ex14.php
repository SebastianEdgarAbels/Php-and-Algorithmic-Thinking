<?php

//“Write a PHP script that prompts the user to enter two positive integers and then displays all prime integers between
// them. Using a loop control structure, the script must also validate data input and display an error message when the
// user enters a value less than +2.
// Hint: To make your PHP script operate correctly, independent of which integer given is the lowest, you can swap their
// values (if necessary) so that they are always in the proper order.”
//
//Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for the Complete Beginner (2nd Edition): Learn to Think
// Like a Programmer”. Apple Books.

// Data input - prompt the user to enter 2 positive integers
echo "Enter an integer bigger then 1: ";
$firstInt = trim (fgets (STDIN)) . "\n";
echo "Enter an integer bigger then 1: ";
$secondInt = trim (fgets (STDIN)) . "\n";


// Data processing and validation
while($firstInt < 2) {
      echo "You entered an Integer smaller then 2. Please enter an bigger then one: \n";
      $firstInt = trim (fgets (STDIN));
}

while($secondInt < 2) {
    echo "You entered an Integer smaller then 2. Please enter an bigger then one: \n";
    $secondInt = trim (fgets (STDIN));
}


if($firstInt > $secondInt) {
    $temp = $firstInt;
    $firstInt = $secondInt;
    $secondInt = $temp;
}

for($i = $firstInt; $i <= $secondInt; $i++) {
    $nrOfDivisors = 2; // because prime nr have only 2 divisors
    $j = 2;
    while{$j <= (int)($i / 2) && $nrOfDivisors == 2} {
        if($i % $j == 0) {
            $nrOfDivisors++;
        }
        $j++;
    }
    if($nrOfDivisors == 2) {
        echo "The number ", $i, " is prime\n";
    }
}
