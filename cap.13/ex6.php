<?php 

// Data input - prompt the user to enter the amount of money he wants to withdraw from
echo "Enter the amount of money you want to withdraw: ";
$iWithdraw = trim (fgets (STDIN));

// Data processing
$i20 = (int ) ($iWithdraw / 20);
$iRemainder = $iWithdraw % 20;

$i10 =  (int ) ($iRemainder / 10);
$iRemainder = $iRemainder % 10;

$i5 = (int ) ($iRemainder / 5);
$i1 = (int ) ($iRemainder % 5);

// Results output - display the least number of notes
echo $i20 . " note(s) of $20, " . $i10 . " note(s) of $10, " . $i5 
. " note(s) of $5 and " . $i1 . " note(s) of $1\n"; 

?>