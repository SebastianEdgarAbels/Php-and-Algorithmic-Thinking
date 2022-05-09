<?php

// Data input - prompt the user to enter a value for x
echo "Enter a number: ";
$x = trim (fgets (STDIN));

// Data processing and Results output
if($x == 5 || $x == -1) {
    echo "Error!\n";
}
else {
    $y = (5 * $x) / ($x - 5) + (3* $x ** 2 + 2 * $x +2) / ($x +1 );
}
?> 