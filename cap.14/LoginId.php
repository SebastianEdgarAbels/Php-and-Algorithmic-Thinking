<?php

// Data input - prompt the user to his last name
echo "Enter your last name: ";
$sName = trim (fgets (STDIN));

// Data processing 
// Get a random integer between 100 - 999
$iRandInt = rand(100, 999);

$sLoginId = strtolower(substr ($sName, 0, 4)) . $iRandInt;

// Results output - display the result on user's display
echo "Your Login Id is " . $sLoginId, "\n";

?>