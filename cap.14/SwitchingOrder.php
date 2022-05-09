<?php

// Data input - prompt the user to enter his vor and last name
echo "Enter your vor and last name: ";
$sFullName = trim (fgets (STDIN));

// Data Processing
// find the the position of space char in between. This is also
// the number of characters first name contains
$sSpace = strpos($sFullName, " ");

//isolate the first name - starting posion 0 till $sSpace (space char)
$sName1 = substr($sFullName, 0, $sSpace);

//get the rest of the characters starting from position $sSpace + 1
$sName2 = substr($sFullName, $sSpace + 1);

$sRes = $sName2 . " " . $sName1;

// Results output - display the result on user's display
echo $sRes, "\n";

?>