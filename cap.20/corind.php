<?php

$a = trim (fgets (STDIN));

if($a > 1000) {
    echo "Big Positive\n";
}
else {
    if($a > 0) {
        echo "Positive\n";
    }
    else {
        if($a < -1000) {
            echo "Big Negative\n";
        }
        else {
            if($a < 0) {
                echo "Negative\n";
            }
            else {
                echo "Zero\n";
            }
        }
    }   
}