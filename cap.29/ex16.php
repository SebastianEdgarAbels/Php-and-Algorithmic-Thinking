<?php

$a = trim (fgets (STDIN));

while($a != -1) {
    do {
        $b = trim (fgets (STDIN));
    } while($b <= $a);

    for($i = $a; $i <= $b; $i++) {
        echo $i;
    }
    $a = trim (fgets (STDIN));
}