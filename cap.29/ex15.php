<?php

$i = 0;

$a = trim (fgets (STDIN));

do {
    if($i % 2 != 0) {
        echo $i;
    }
    $i += 5;
} while($i <= $a);
