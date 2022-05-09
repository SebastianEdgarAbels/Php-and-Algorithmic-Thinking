<?php

// Data input - prompt the user to enter his name
echo "Enter your vor and last name: ";
$sFN = trim (fgets (STDIN)); // $sFN = strtolower (trim (fgets (STDIN)));

// Data processing
// 3 letters lowercase randomly picked and a rdm four digit number
$sLowRep = strtolower (str_replace (" ", "", $sFN));

$sSelect = $sLowRep[rand(0, strlen ($sLowRep) - 1)] .
           $sLowRep[rand(0, strlen ($sLowRep) - 1)] .
           $sLowRep[rand(0, strlen ($sLowRep) - 1)];
$iNr = rand(1000, 9999);

// Results output - display the result on user's display
echo "Your password is: " . $sSelect . $iNr,"\n";
?>