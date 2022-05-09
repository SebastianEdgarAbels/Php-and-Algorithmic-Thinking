<?php

// Data input - prompt the user to enter the subtotal and the gratuity
echo "Enter the subtotal: ";
$iSubtotal = trim (fgets (STDIN));
echo "Enter the gratuity (0-100): ";
$iGratuity = trim (fgets (STDIN));

// Data processing
$iTip = $iSubtotal * $iGratuity/100;
$iTotal = $iSubtotal + $iTip;

// Results output - display the results on user's display
echo "The tip is " . $iTip . " and the total is " . $iTotal, "\n";


?>