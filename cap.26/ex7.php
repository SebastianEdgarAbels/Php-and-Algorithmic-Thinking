<?php
// Cap 26. 26.5.7

// “Write a PHP script that calculates and displays the sine of all
//  numbers from 0 to 360°, using a step of 0.5. It is given that
//   2π = 360°”

// Excerpt From: Bouras, Aristides. “PHP and Algorithmic Thinking for
//the Complete Beginner (2nd Edition): Learn to Think Like a 
//Programmer”.

for($i=0; $i <= 360; $i += 0.5) {
    echo sin($i * pi()/180), "\n";
}
?>