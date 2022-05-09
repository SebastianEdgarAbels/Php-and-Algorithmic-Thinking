<?php

// Data input - prompt the user to enter a number
echo "Enter a number: ";
$x = trim (fgets (STDIN));

// Data processing and Results output
if($x<=-15||$x>25){
    $y=$x-1;
    echo $y, "\n"; 
}
elseif ($x <= -10) { 
    $y=$x/sqrt($x+30)+(8+$x)**2/($x+1); 
    echo $y, "\n";
}
elseif ($x <= 0) {
    $y=abs(40*$x)/($x-8);
    echo $y, "\n"; 
}
else { 
    if($x==9){
        echo "Error: Division by zero\n"; 
    }
    elseif ($x < 9) {
        echo "Error: Invalid square root\n";
    } 
    else {
        $y=3*$x/sqrt($x-9);
        echo $y, "\n"; 
    }
}
?>    