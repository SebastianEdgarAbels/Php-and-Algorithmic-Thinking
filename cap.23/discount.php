<?php

// Data input - prompt the user to enter the total amount of his order
echo "Enter the total amount of your order: ";
$iAmount = trim (fgets (STDIN));

// Data processing and Results output
if($iAmount < 0) {
    echo "Invalid amount!\n";
}
else {
    if($iAmount < 30) {
        $iDisc = 0;
    }
    elseif($iAmount < 70) {
        $iDisc = 5;
    }
    elseif($iAmount < 150) {
        $iDisc = 10;
    }
    else{
        $iDisc = 20;
    }
    $iDiscAmount = $iAmount * $iDisc/100;
    $iRes = $iAmount - $iDiscAmount;
    // They have to be put inside the else because if not if the amount 
    // is negative will write that echo from the first Boolean Expression and then will execute
    // the code below !!!!
    echo "The discount you received is " . $iDisc . "\n";
    echo "You saved " . $iDiscAmount . "$\n";
    echo "The total amount you have to pay is " . $iRes . "\n";
}
 ?>