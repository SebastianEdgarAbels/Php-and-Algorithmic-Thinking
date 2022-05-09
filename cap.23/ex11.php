<?php

// Data input - prompt the user to enter a value
echo "Enter a value: ";
$x = trim (fgets (STDIN));

// Data processing and Results output
if($x >= 10) {
    if($x == -1 || $x == -2) {
        echo "Error: Division by 0!\n";
    }
    else {
        $y = $x**2 / ($x + 1) + (3 - sqrt($x)) / ($x +2);
        echo $y, "\n";
    }
}
elseif($x != 9){   
    $y = (40 * $x) / ($x -9) + 3 * $x;
    echo $y, "\n";
}
else {
    echo "Error: Division by 0!\n";
}
?>